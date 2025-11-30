@extends('layouts.dashboard')

@section('title', 'Dashboard Rumah Sakit')

@section('content')

<div class="grid grid-cols-4 gap-6">

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-bold">Total Pasien</h3>
        <p class="text-3xl font-bold text-blue-600">{{ $pasien }}</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-bold">Dokter</h3>
        <p class="text-3xl font-bold text-green-600">{{ $dokter }}</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-bold">Rawat Inap</h3>
        <p class="text-3xl font-bold text-red-600">{{ $rawat }}</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-bold">Obat</h3>
        <p class="text-3xl font-bold text-purple-600">{{ $obat }}</p>
    </div>

</div>

@endsection
