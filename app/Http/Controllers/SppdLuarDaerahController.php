<?php

namespace App\Http\Controllers;

use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use Illuminate\Http\Request;

class SppdLuarDaerahController extends Controller
{
    public function print(SppdLuarDaerah $sppdLuarDaerah)
    {
        // Logika untuk mencetak data
        return view('sppd-luar-daerah.print', compact('sppdLuarDaerah'));
    }
}
