<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\TransaksiDetail;

class DashboardController extends Controller
{
    public function index()
    {

        $transaksi_count = Transaksi::count();
        $sumItem = TransaksiDetail::sum('jumlah');
        $total_harga = Transaksi::sum('total_harga');

        // Mengirim data ke view dashboard
        return view('dashboard', [
            'transaksi_count' => $transaksi_count, 'sumItem' => $sumItem, 'total_harga' => $total_harga
        ]);
    }
}
