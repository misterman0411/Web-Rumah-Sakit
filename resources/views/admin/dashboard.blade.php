@extends('layouts.admin')

@section('header')
    Dashboard Rumah Sakit
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Pasien -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100">
            <h3 class="text-gray-900 font-bold mb-2">Total Pasien</h3>
            <p class="text-3xl font-bold text-blue-600">{{ $totalPasien }}</p>
        </div>

        <!-- Dokter -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100">
            <h3 class="text-gray-900 font-bold mb-2">Dokter</h3>
            <p class="text-3xl font-bold text-green-600">{{ $totalDokter }}</p>
        </div>

        <!-- Rawat Inap -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100">
            <h3 class="text-gray-900 font-bold mb-2">Rawat Inap</h3>
            <p class="text-3xl font-bold text-red-600">{{ $totalRawatInap }}</p>
        </div>

        <!-- Obat -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100">
            <h3 class="text-gray-900 font-bold mb-2">Obat</h3>
            <p class="text-3xl font-bold text-purple-600">{{ $totalObat }}</p>
        </div>
    </div>
@endsection
