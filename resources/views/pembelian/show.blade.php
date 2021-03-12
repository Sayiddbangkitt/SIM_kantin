@extends('layouts.app')
@section('title','Dashboard Kantin | Pembelian')
@section('pageTitle','Detail Pembelian')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
            <h4>Detail Belanja</h4>
            <div class="card-header-action">
                <a href="{{ route('pembelian.index') }}" class="btn btn-danger">Kembali</a>
            </div>
            </div>
            <div class="card-body">
            <div class="row">
            <div class="col-lg-12">
            <p>Nama Barang : {{$beli->nama_barang}}</p>
            <p>Harga : {{$beli->harga}}</p>
            <p>Jumlah : {{$beli->jumlah}}</p>
            <p>Tanggal : {{$beli->hari}}-{{$beli->bulan}}-{{$beli->tahun}}</p>
            </div>
            </div>
            <div class="mb-2 text-muted">Click untuk memperbesar gambar</div>
            <div class="chocolat-parent">
                <a href="{{ asset('storage/surat/'. $beli->bukti) }}" class="chocolat-image">
                <div data-crop-image="285">
                    <img alt="image" src="{{ asset('storage/surat/'. $beli->bukti) }}" class="img-fluid">
                </div>
                </a>
            </div>
            </div>
        </div>        
    </div>
@endsection