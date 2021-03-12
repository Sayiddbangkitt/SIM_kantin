<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Pembelian;
use File;
class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beli = Pembelian::all();
        return view('pembelian.index',compact('beli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.create');
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
            'jumlah' => 'required',
            'harga' => 'required',
            'hari' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'bukti' => 'max:5000|required'
        ]);
        if ($request->file('bukti')) {
            $file = $request->file('bukti');
            $namaFile = time() . '-' . $file->getClientOriginalName();
            $file->move(storage_path('app/public/surat'), $namaFile);            
            Pembelian::create([
                'nama_barang' => $request->nama_barang,
                'jumlah' => $request->jumlah,
                'harga' => $request->harga,
                'bukti' => $namaFile,
                'hari' => $request->hari,
                'bulan' => $request->bulan,
                'tahun' => $request->tahun
            ]);
            return redirect(route('pembelian.index'))->with('notif', 'Data pembelian berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beli = Pembelian::find($id);
        return view('pembelian.show',compact('beli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
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
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beli = Pembelian::find($id);        
        $oldfile = public_path('storage/surat/').$beli->bukti;
        // dd($oldfile);
        // File::delete($oldfile);
        // $beli->delete();                    
        // return redirect('pembelian')->with('notif','Data dihapus');
        if(file_exists($oldfile)){
            @unlink($oldfile);
            $beli->delete();
            return redirect('pembelian')->with('notif','File dihapus');
        }else{
            dd($oldfile);
        }
    }
}
