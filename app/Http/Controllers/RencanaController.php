<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rencana;
class RencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rencana = Rencana::all();
        return view('perencanaan.index',compact('rencana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perencanaan.create');
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
            'jumlah' => 'min:1',
            'tanggal' => 'required'
        ]);
        Rencana::create([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal
        ]);

        return redirect('rencana')->with('notif','Data Rencana Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rencana = Rencana::find($id);
        return view('perencanaan.show',compact('rencana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rencana = Rencana::find($id);
        return view('perencanaan.edit',compact('rencana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rencana $rencana)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'min:1|required',
            'tanggal' => 'required'
            
        ]);
        Rencana::where('id',$rencana->id)->update([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal
        ]);

        return redirect('rencana')->with('notif','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rencana = Rencana::find($id);
        $rencana->delete();
        return redirect('rencana')->with('notif','Data dihapus');
    }
}
