<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\TransaksiDetail;

class DashboardController extends Controller
{
    public function index()
    {

        $transaksi_count = Transaksi::count();
        $sumItem = TransaksiDetail::sum('jumlah'); // Asumsi kolom 'jumlah' ada di tabel TransaksiDetail
        $total_harga = Transaksi::sum('total_harga');

        // Mengirim data ke view dashboard
        return view('dashboard', [
            'transaksi_count' => $transaksi_count, 'sum' => $sumItem, 'total' => $total_harga
        ]);
    }
}
