<?php

namespace App\Helpers;

use Carbon\Carbon;

class NomorSuratHelper
{
    /**
     * Generate nomor surat berdasarkan tanggal dan tipe surat
     * 
     * @param string $tanggal Tanggal dalam format Y-m-d
     * @param string $tipeSurat DD untuk dalam daerah, LD untuk luar daerah
     * @param string $modelClass Nama class model (SppdDalamDaerah atau SppdLuarDaerah)
     * @return string
     */
    public static function generateNomorSurat($tanggal, $tipeSurat = 'DD', $modelClass = null)
    {
        $tanggalObj = Carbon::parse($tanggal);
        $currentYear = $tanggalObj->format('Y');
        $currentMonth = $tanggalObj->format('m');
        $currentDay = $tanggalObj->format('d');
        
        // Tentukan field tanggal berdasarkan tipe surat
        $tanggalField = $tipeSurat === 'DD' ? 'tanggal_spt' : 'tanggal_berangkat';
        
        // Ambil semua record untuk tanggal yang sama
        $records = $modelClass::whereDate($tanggalField, $tanggal)
            ->get();

        // Jika tidak ada data untuk tanggal ini, cari nomor terakhir untuk bulan dan tahun yang sama
        if ($records->isEmpty()) {
            $monthRecords = $modelClass::whereYear($tanggalField, $currentYear)
                ->whereMonth($tanggalField, $currentMonth)
                ->orderBy($tanggalField, 'asc') // Urutkan berdasarkan tanggal terlebih dahulu
                ->orderBy('id', 'asc') // Kemudian berdasarkan ID untuk konsistensi
                ->get();

            if ($monthRecords->isEmpty()) {
                $newNumber = '001';
            } else {
                // PERBAIKAN: Cari nomor terbesar berdasarkan urutan tanggal yang benar
                // Urutkan berdasarkan tanggal terlebih dahulu, kemudian berdasarkan nomor
                $sortedRecords = $monthRecords->sortBy(function ($record) use ($tanggalField) {
                    return $record->{$tanggalField}->format('Y-m-d') . '_' . $record->id;
                });
                
                // Cari nomor terbesar dari semua record yang sudah diurutkan berdasarkan tanggal
                $maxNumber = '000';
                $maxNumberWithLetter = null;
                
                foreach ($sortedRecords as $record) {
                    if (!$record->nomor_spt) continue;
                    
                    $parts = explode('/', $record->nomor_spt);
                    if (count($parts) >= 2) {
                        $numberPart = $parts[1];
                        
                        // Cek apakah ada huruf di akhir
                        if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                            // Format: 088.a
                            $baseNumber = $matches[1];
                            $letter = $matches[2];
                            
                            // Jika base number lebih besar, update max
                            if (intval($baseNumber) > intval($maxNumber)) {
                                $maxNumber = $baseNumber;
                                $maxNumberWithLetter = $numberPart;
                            } elseif (intval($baseNumber) == intval($maxNumber)) {
                                // Jika base number sama, bandingkan huruf
                                if (!$maxNumberWithLetter || ord($letter) > ord(substr($maxNumberWithLetter, -1))) {
                                    $maxNumberWithLetter = $numberPart;
                                }
                            }
                        } else {
                            // Format: 088 (tanpa huruf)
                            if (intval($numberPart) > intval($maxNumber)) {
                                $maxNumber = $numberPart;
                                $maxNumberWithLetter = null;
                            }
                        }
                    }
                }
                
                // Generate nomor berikutnya untuk bulan yang sama
                if ($maxNumberWithLetter) {
                    // Ada nomor dengan huruf
                    if (preg_match('/^(\d+)\.([a-z])$/', $maxNumberWithLetter, $matches)) {
                        $baseNumber = intval($matches[1]);
                        $lastLetter = $matches[2];
                        
                        // Jika huruf terakhir adalah 'z', tambah nomor dan mulai dari 'a'
                        if ($lastLetter === 'z') {
                            $newBaseNumber = $baseNumber + 1;
                            $newLetter = 'a';
                        } else {
                            $newBaseNumber = $baseNumber;
                            $newLetter = chr(ord($lastLetter) + 1);
                        }
                        
                        $newNumber = str_pad($newBaseNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                    } else {
                        $newNumber = str_pad(intval($maxNumber) + 1, 3, '0', STR_PAD_LEFT);
                    }
                } else {
                    // Tidak ada nomor dengan huruf, tambah 1
                    $newNumber = str_pad(intval($maxNumber) + 1, 3, '0', STR_PAD_LEFT);
                }
            }
        } else {
            // Ada data untuk tanggal yang sama, cari nomor yang sama dan tambahkan huruf
            $sameDateNumbers = [];
            
            foreach ($records as $record) {
                if (!$record->nomor_spt) continue;
                
                $parts = explode('/', $record->nomor_spt);
                if (count($parts) >= 2) {
                    $numberPart = $parts[1];
                    
                    // Cek apakah ada huruf di akhir
                    if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                        // Format: 088.a
                        $baseNumber = $matches[1];
                        $letter = $matches[2];
                        
                        if (!isset($sameDateNumbers[$baseNumber])) {
                            $sameDateNumbers[$baseNumber] = [];
                        }
                        $sameDateNumbers[$baseNumber][] = $letter;
                    } else {
                        // Format: 088 (tanpa huruf)
                        $baseNumber = $numberPart;
                        if (!isset($sameDateNumbers[$baseNumber])) {
                            $sameDateNumbers[$baseNumber] = [];
                        }
                    }
                }
            }
            
            // Cari nomor yang paling sering digunakan pada tanggal yang sama
            $mostUsedNumber = null;
            $maxCount = 0;
            
            foreach ($sameDateNumbers as $baseNumber => $letters) {
                // Hitung total penggunaan (termasuk tanpa huruf)
                $count = count($letters);
                if (empty($letters)) {
                    // Jika tidak ada huruf, berarti ada 1 penggunaan
                    $count = 1;
                }
                
                if ($count > $maxCount) {
                    $maxCount = $count;
                    $mostUsedNumber = $baseNumber;
                }
            }
            
            if ($mostUsedNumber) {
                // Ada nomor yang sudah digunakan pada tanggal yang sama
                $letters = $sameDateNumbers[$mostUsedNumber];
                
                if (empty($letters)) {
                    // Nomor tanpa huruf, tambahkan huruf 'a'
                    $newNumber = str_pad($mostUsedNumber, 3, '0', STR_PAD_LEFT) . '.a';
                } else {
                    // Ada huruf, cari huruf terbesar dan tambahkan 1
                    sort($letters);
                    $lastLetter = end($letters);
                    
                    if ($lastLetter === 'z') {
                        // Jika huruf terakhir adalah 'z', tambah nomor dan mulai dari 'a'
                        $newBaseNumber = intval($mostUsedNumber) + 1;
                        $newLetter = 'a';
                        $newNumber = str_pad($newBaseNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                    } else {
                        // Tambah huruf berikutnya
                        $newLetter = chr(ord($lastLetter) + 1);
                        $newNumber = str_pad($mostUsedNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                    }
                }
            } else {
                // Tidak ada nomor yang sama, cari nomor terbesar untuk bulan yang sama
                $monthRecords = $modelClass::whereYear($tanggalField, $currentYear)
                    ->whereMonth($tanggalField, $currentMonth)
                    ->orderBy($tanggalField, 'asc') // Urutkan berdasarkan tanggal terlebih dahulu
                    ->orderBy('id', 'asc') // Kemudian berdasarkan ID untuk konsistensi
                    ->get();
                
                $maxNumber = '000';
                $maxNumberWithLetter = null;
                
                // Urutkan berdasarkan tanggal terlebih dahulu, kemudian berdasarkan nomor
                $sortedRecords = $monthRecords->sortBy(function ($record) use ($tanggalField) {
                    return $record->{$tanggalField}->format('Y-m-d') . '_' . $record->id;
                });
                
                foreach ($sortedRecords as $record) {
                    if (!$record->nomor_spt) continue;
                    
                    $parts = explode('/', $record->nomor_spt);
                    if (count($parts) >= 2) {
                        $numberPart = $parts[1];
                        
                        if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                            $baseNumber = $matches[1];
                            $letter = $matches[2];
                            
                            if (intval($baseNumber) > intval($maxNumber)) {
                                $maxNumber = $baseNumber;
                                $maxNumberWithLetter = $numberPart;
                            } elseif (intval($baseNumber) == intval($maxNumber)) {
                                if (!$maxNumberWithLetter || ord($letter) > ord(substr($maxNumberWithLetter, -1))) {
                                    $maxNumberWithLetter = $numberPart;
                                }
                            }
                        } else {
                            if (intval($numberPart) > intval($maxNumber)) {
                                $maxNumber = $numberPart;
                                $maxNumberWithLetter = null;
                            }
                        }
                    }
                }
                
                // Generate nomor berikutnya
                if ($maxNumberWithLetter) {
                    if (preg_match('/^(\d+)\.([a-z])$/', $maxNumberWithLetter, $matches)) {
                        $baseNumber = intval($matches[1]);
                        $lastLetter = $matches[2];
                        
                        if ($lastLetter === 'z') {
                            $newBaseNumber = $baseNumber + 1;
                            $newLetter = 'a';
                        } else {
                            $newBaseNumber = $baseNumber;
                            $newLetter = chr(ord($lastLetter) + 1);
                        }
                        
                        $newNumber = str_pad($newBaseNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                    } else {
                        $newNumber = str_pad(intval($maxNumber) + 1, 3, '0', STR_PAD_LEFT);
                    }
                } else {
                    $newNumber = str_pad(intval($maxNumber) + 1, 3, '0', STR_PAD_LEFT);
                }
            }
        }

        // Format nomor sesuai kebutuhan
        $nomorSpt = "800.1.11.1/{$newNumber}/{$tipeSurat}/{$currentYear}";

        return $nomorSpt;
    }

    /**
     * Parse nomor surat untuk mendapatkan komponennya
     * 
     * @param string $nomorSurat
     * @return array
     */
    public static function parseNomorSurat($nomorSurat)
    {
        $parts = explode('/', $nomorSurat);
        
        if (count($parts) >= 4) {
            return [
                'prefix' => $parts[0], // 800.1.11.1
                'nomor' => $parts[1],  // 088 atau 088.a
                'tipe' => $parts[2],   // DD atau LD
                'tahun' => $parts[3],  // 2025
            ];
        }
        
        return null;
    }

    /**
     * Cek apakah nomor surat sudah ada di database
     * 
     * @param string $nomorSurat
     * @param string $modelClass
     * @return bool
     */
    public static function isNomorSuratExists($nomorSurat, $modelClass)
    {
        return $modelClass::where('nomor_spt', $nomorSurat)->exists();
    }

    /**
     * Get next available number for specific month and year
     * 
     * @param string $tanggal
     * @param string $tipeSurat
     * @param string $modelClass
     * @return string
     */
    public static function getNextNumber($tanggal, $tipeSurat = 'DD', $modelClass = null)
    {
        $tanggalObj = Carbon::parse($tanggal);
        $currentYear = $tanggalObj->format('Y');
        $currentMonth = $tanggalObj->format('m');
        $currentDay = $tanggalObj->format('d');
        
        // Tentukan field tanggal berdasarkan tipe surat
        $tanggalField = $tipeSurat === 'DD' ? 'tanggal_spt' : 'tanggal_berangkat';
        
        // Ambil semua record untuk tanggal yang sama
        $records = $modelClass::whereDate($tanggalField, $tanggal)
            ->get();

        // Jika tidak ada data untuk tanggal ini, cari nomor terakhir untuk bulan dan tahun yang sama
        if ($records->isEmpty()) {
            $monthRecords = $modelClass::whereYear($tanggalField, $currentYear)
                ->whereMonth($tanggalField, $currentMonth)
                ->get();

            if ($monthRecords->isEmpty()) {
                return '001';
            }

            // Cari nomor terbesar berdasarkan nomor SPT untuk bulan yang sama
            $maxNumber = '000';
            $maxNumberWithLetter = null;
            
            foreach ($monthRecords as $record) {
                if (!$record->nomor_spt) continue;
                
                $parts = explode('/', $record->nomor_spt);
                if (count($parts) >= 2) {
                    $numberPart = $parts[1];
                    
                    if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                        $baseNumber = $matches[1];
                        $letter = $matches[2];
                        
                        if (intval($baseNumber) > intval($maxNumber)) {
                            $maxNumber = $baseNumber;
                            $maxNumberWithLetter = $numberPart;
                        } elseif (intval($baseNumber) == intval($maxNumber)) {
                            if (!$maxNumberWithLetter || ord($letter) > ord(substr($maxNumberWithLetter, -1))) {
                                $maxNumberWithLetter = $numberPart;
                            }
                        }
                    } else {
                        if (intval($numberPart) > intval($maxNumber)) {
                            $maxNumber = $numberPart;
                            $maxNumberWithLetter = null;
                        }
                    }
                }
            }
            
            // Generate nomor berikutnya untuk bulan yang sama
            if ($maxNumberWithLetter) {
                if (preg_match('/^(\d+)\.([a-z])$/', $maxNumberWithLetter, $matches)) {
                    $baseNumber = intval($matches[1]);
                    $lastLetter = $matches[2];
                    
                    if ($lastLetter === 'z') {
                        $newBaseNumber = $baseNumber + 1;
                        $newLetter = 'a';
                    } else {
                        $newBaseNumber = $baseNumber;
                        $newLetter = chr(ord($lastLetter) + 1);
                    }
                    
                    return str_pad($newBaseNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                } else {
                    return str_pad(intval($maxNumber) + 1, 3, '0', STR_PAD_LEFT);
                }
            } else {
                return str_pad(intval($maxNumber) + 1, 3, '0', STR_PAD_LEFT);
            }
        } else {
            // Ada data untuk tanggal yang sama, cari nomor yang sama dan tambahkan huruf
            $sameDateNumbers = [];
            
            foreach ($records as $record) {
                if (!$record->nomor_spt) continue;
                
                $parts = explode('/', $record->nomor_spt);
                if (count($parts) >= 2) {
                    $numberPart = $parts[1];
                    
                    if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                        $baseNumber = $matches[1];
                        $letter = $matches[2];
                        
                        if (!isset($sameDateNumbers[$baseNumber])) {
                            $sameDateNumbers[$baseNumber] = [];
                        }
                        $sameDateNumbers[$baseNumber][] = $letter;
                    } else {
                        $baseNumber = $numberPart;
                        if (!isset($sameDateNumbers[$baseNumber])) {
                            $sameDateNumbers[$baseNumber] = [];
                        }
                    }
                }
            }
            
            // Cari nomor yang paling sering digunakan pada tanggal yang sama
            $mostUsedNumber = null;
            $maxCount = 0;
            
            foreach ($sameDateNumbers as $baseNumber => $letters) {
                // Hitung total penggunaan (termasuk tanpa huruf)
                $count = count($letters);
                if (empty($letters)) {
                    // Jika tidak ada huruf, berarti ada 1 penggunaan
                    $count = 1;
                }
                
                if ($count > $maxCount) {
                    $maxCount = $count;
                    $mostUsedNumber = $baseNumber;
                }
            }
            
            if ($mostUsedNumber) {
                // Ada nomor yang sudah digunakan pada tanggal yang sama
                $letters = $sameDateNumbers[$mostUsedNumber];
                
                if (empty($letters)) {
                    // Nomor tanpa huruf, tambahkan huruf 'a'
                    return str_pad($mostUsedNumber, 3, '0', STR_PAD_LEFT) . '.a';
                } else {
                    // Ada huruf, cari huruf terbesar dan tambahkan 1
                    sort($letters);
                    $lastLetter = end($letters);
                    
                    if ($lastLetter === 'z') {
                        // Jika huruf terakhir adalah 'z', tambah nomor dan mulai dari 'a'
                        $newBaseNumber = intval($mostUsedNumber) + 1;
                        $newLetter = 'a';
                        return str_pad($newBaseNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                    } else {
                        // Tambah huruf berikutnya
                        $newLetter = chr(ord($lastLetter) + 1);
                        return str_pad($mostUsedNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                    }
                }
            } else {
                // Tidak ada nomor yang sama, cari nomor terbesar untuk bulan yang sama
                $monthRecords = $modelClass::whereYear($tanggalField, $currentYear)
                    ->whereMonth($tanggalField, $currentMonth)
                    ->get();
                
                $maxNumber = '000';
                $maxNumberWithLetter = null;
                
                foreach ($monthRecords as $record) {
                    if (!$record->nomor_spt) continue;
                    
                    $parts = explode('/', $record->nomor_spt);
                    if (count($parts) >= 2) {
                        $numberPart = $parts[1];
                        
                        if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                            $baseNumber = $matches[1];
                            $letter = $matches[2];
                            
                            if (intval($baseNumber) > intval($maxNumber)) {
                                $maxNumber = $baseNumber;
                                $maxNumberWithLetter = $numberPart;
                            } elseif (intval($baseNumber) == intval($maxNumber)) {
                                if (!$maxNumberWithLetter || ord($letter) > ord(substr($maxNumberWithLetter, -1))) {
                                    $maxNumberWithLetter = $numberPart;
                                }
                            }
                        } else {
                            if (intval($numberPart) > intval($maxNumber)) {
                                $maxNumber = $numberPart;
                                $maxNumberWithLetter = null;
                            }
                        }
                    }
                }
                
                // Generate nomor berikutnya
                if ($maxNumberWithLetter) {
                    if (preg_match('/^(\d+)\.([a-z])$/', $maxNumberWithLetter, $matches)) {
                        $baseNumber = intval($matches[1]);
                        $lastLetter = $matches[2];
                        
                        if ($lastLetter === 'z') {
                            $newBaseNumber = $baseNumber + 1;
                            $newLetter = 'a';
                        } else {
                            $newBaseNumber = $baseNumber;
                            $newLetter = chr(ord($lastLetter) + 1);
                        }
                        
                        return str_pad($newBaseNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                    } else {
                        return str_pad(intval($maxNumber) + 1, 3, '0', STR_PAD_LEFT);
                    }
                } else {
                    return str_pad(intval($maxNumber) + 1, 3, '0', STR_PAD_LEFT);
                }
            }
        }
    }
} 