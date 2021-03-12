<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use App\Pembelian;
use App\Pengeluaran;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        $pembelian = Pembelian::all();

        return view('laporan.index',compact('pengeluaran','pembelian'));
    }
    public function print()
    {        
        $bulan = now()->format('m');
        // dd($bulan);
        $pengeluaran = Pengeluaran::where('bulan', $bulan)->get();
        $pembelian = Pembelian::where('bulan',$bulan)->get();                     
        $pdf = PDF::loadview('laporan.cetak',compact('pengeluaran','pembelian'))->setPaper('A4','potrait');
        return $pdf->download('laporan-bulanan.pdf');       
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
