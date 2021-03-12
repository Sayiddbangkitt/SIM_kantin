<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        return view('pengeluaran.index',compact('pengeluaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengeluaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'min:1|required',
            'hari' => 'required',
            'bulan' => 'required',
            'tahun' => 'required'
        ]);
        Pengeluaran::create([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'hari' => $request->hari,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun
        ]);

        return redirect('pengeluaran')->with('notif','Data pengeluaran ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        return view('pengeluaran.show',compact('pengeluaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        return view('pengeluaran.edit',compact('pengeluaran'));
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
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'min:1|required',
            'hari' => 'required',
            'bulan' => 'required',
            'tahun' => 'required'
            
        ]);
        $pengeluaran = Pengeluaran::find($id);
        Pengeluaran::where('id',$pengeluaran->id)->update([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'hari' => $request->hari,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun
        ]);

        return redirect('pengeluaran')->with('notif','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->delete();
        return redirect('pengeluaran')->with('notif','Data dihapus');
    }
}
