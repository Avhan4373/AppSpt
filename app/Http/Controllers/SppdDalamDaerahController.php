<?php

namespace App\Http\Controllers;

use App\Models\SppdDalamDaerah;
use Illuminate\Http\Request;

class SppdDalamDaerahController extends Controller
{
    public function print(SppdDalamDaerah $sppdDalamDaerah)
    {
        // Logika untuk mencetak data
        return view('sppd-dalam-daerah.print', compact('sppdDalamDaerah'));
    }
}
