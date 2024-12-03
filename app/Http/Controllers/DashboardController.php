<?php

namespace App\Http\Controllers;

use App\Models\Transaksi; // Import model Transaksi

class DashboardController extends Controller
{
    public function index()
    {

        $transaksi_count = Transaksi::count();

        // Mengirim data ke view dashboard
        return view('dashboard', [
            'transaksi_count' => $transaksi_count
        ]);
    }
}
