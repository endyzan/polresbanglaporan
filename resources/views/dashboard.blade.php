@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">Dashboard Admin</h2>
    
    <!-- Grid diubah menjadi 2 kolom untuk layar medium ke atas -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Kartu Daftar Polsek -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition h-full">
            <div class="flex items-center space-x-4">
                <div class="bg-blue-500 p-3 rounded-full text-white">
                    <i class="fas fa-building text-2xl"></i>
                </div>
                <div class="pl-10">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Polsek</h3>
                    <p class="text-gray-500">Kelola data polsek yang terdaftar</p>
                </div>
            </div>
            <a href="{{ route('admin.polsek.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat Data</a>
        </div>

        <!-- Kartu Statistik -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition h-full">
            <div class="flex items-center space-x-4">
                <div class="bg-purple-500 p-3 rounded-full text-white">
                    <i class="fas fa-chart-pie text-2xl"></i>
                </div>
                <div class="pl-12">
                    <h3 class="text-lg font-semibold text-gray-700">Statistik</h3>
                    <p class="text-gray-500">Lihat detail kunjungan website</p>
                </div>
            </div>
            <a href="{{ route('admin.statistik.index') }}" class="mt-4 inline-block text-purple-600 hover:underline">Lihat Statistik</a>
        </div>
    </div>
</div>
@endsection