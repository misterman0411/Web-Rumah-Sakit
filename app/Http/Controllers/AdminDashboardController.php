<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        if (\Illuminate\Support\Facades\Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        $totalPasien = \App\Models\Pasien::count();
        $totalDokter = \App\Models\Dokter::count();
        $totalRawatInap = \App\Models\RawatInap::count();
        $totalObat = \App\Models\Obat::count();

        return view('admin.dashboard', compact('totalPasien', 'totalDokter', 'totalRawatInap', 'totalObat'));
    }
}
