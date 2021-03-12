<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rencana;
use App\Pembelian;
use App\Pengeluaran;

class DashboardController extends Controller
{
    public function index()
    {
        $rencana = Rencana::all();
        $pembelian = Pembelian::all();
        $pengeluaran = Pengeluaran::all();
        return view('dashboard.index',compact('rencana','pembelian','pengeluaran'));
    }
}
