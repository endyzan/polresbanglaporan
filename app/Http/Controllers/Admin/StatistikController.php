<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        // Contoh data kunjungan, nanti bisa disesuaikan dengan sistem tracking yang kamu pakai
        $statistik = [
            'total_pengunjung' => 3250,
            'hari_ini' => 75,
            'kemarin' => 103,
            'bulan_ini' => 1245
        ];

        return view('admin.statistik.index', compact('statistik'));
    }
}
