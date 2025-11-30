<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\RawatInap;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'pasien' => Pasien::count(),
            'dokter' => Dokter::count(),
            'rawat'  => RawatInap::count(),
            'obat'   => Obat::count(),
        ]);
    }
}
