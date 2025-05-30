@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Statistik Pengunjung</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-gray-500">Total Pengunjung</p>
            <h3 class="text-2xl font-bold text-purple-600">{{ $statistik['total_pengunjung'] }}</h3>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-gray-500">Hari Ini</p>
            <h3 class="text-2xl font-bold text-purple-600">{{ $statistik['hari_ini'] }}</h3>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-gray-500">Kemarin</p>
            <h3 class="text-2xl font-bold text-purple-600">{{ $statistik['kemarin'] }}</h3>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-gray-500">Bulan Ini</p>
            <h3 class="text-2xl font-bold text-purple-600">{{ $statistik['bulan_ini'] }}</h3>
        </div>
    </div>
</div>
@endsection
