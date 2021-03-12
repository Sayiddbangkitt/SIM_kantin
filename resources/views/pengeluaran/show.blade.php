@extends('layouts.app')
@section('title','Dashboard Kantin | Detail Rencana')
@section('pageTitle','Detail Perencanaan')
@section('content')
<div class="container">
        <a href="{{ route('pengeluaran.index') }}" class="btn btn-danger mb-3"> <i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="card">
            <div class="card-header">
                <h4>Data Pengeluaran</h4>
            </div>                        
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama Barang</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_barang" class="form-control" id="name" value="{{ $pengeluaran->nama_barang }}" disabled>
                    </div>                    
                </div>                
                <div class="form-group row">
                    <label for="jml" class="col-sm-3 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-9">
                    <input type="text" name="jumlah" min="1" class="form-control" id="jml" value="{{ $pengeluaran->jumlah }}" disabled>
                    </div>
                </div>                
                <div class="form-group row">
                    <label for="tgl" class="col-sm-3 col-form-label">Tanggal Pengeluaran</label>
                    <div class="col-sm-9">
                    <input type="text" name="tanggal" class="form-control" id="tgl" value="{{ $pengeluaran->hari }}-{{ $pengeluaran->bulan }}-{{ $pengeluaran->tahun }}" disabled>
                    </div>
                </div>                
            
            </div>
            <div class="card-footer">
                <a href="{{ route('pengeluaran.edit',$pengeluaran->id) }}" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit</a>
            </div>                         
        </div>
    </div>
@endsection