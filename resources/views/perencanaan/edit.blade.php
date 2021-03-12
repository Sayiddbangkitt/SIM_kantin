@extends('layouts.app')
@section('title','Dashboard Kantin | Perencanaan')
@section('pageTitle','Edit Perencanaan')
@section('content')
    <div class="container">
        <a href="{{ route('rencana.index') }}" class="btn btn-danger mb-3"> <i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="card">
            <div class="card-header">
                <h4>Edit Rencana Pembelian</h4>
            </div>
            <form action="{{ route('rencana.update',$rencana->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama Barang</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" id="name" value="{{ $rencana->nama_barang }}">
                        @error('nama_barang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>                    
                </div>                
                <div class="form-group row">
                    <label for="jml" class="col-sm-3 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-9">
                    <input type="number" name="jumlah" min="1" class="form-control @error('jumlah') is-invalid @enderror" id="jml" value="{{ $rencana->jumlah }}">
                    @error('jumlah')
                            <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label for="tgl" class="col-sm-3 col-form-label">Rencana Pembelian</label>
                    <div class="col-sm-9">
                    <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="tgl" value="{{ $rencana->tanggal }}">
                            @error('tanggal')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>                
            
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
            </div>
            </form>                
        </div>
    </div>
@endsection