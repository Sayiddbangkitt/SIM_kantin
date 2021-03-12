@extends('layouts.app')
@section('title','Dashboard Kantin | Pembelian')
@section('pageTitle','Tambah Pembelian')
@section('content')
    <div class="container-fluid">
    <a href="{{ route('rencana.index') }}" class="btn btn-danger mb-3"> <i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Pembelian</h4>
            </div>
            <form action="{{ route('pembelian.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama Barang</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" id="name" placeholder="Nama Barang">
                        @error('nama_barang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>                    
                </div>                
                <div class="form-group row">
                    <label for="jml" class="col-sm-3 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-9">
                    <input type="text" name="jumlah" min="1" class="form-control @error('jumlah') is-invalid @enderror" id="jml" placeholder="Contoh : 1kg/1buah">
                    @error('jumlah')
                            <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label for="jml" class="col-sm-3 col-form-label">Harga Barang</label>
                    <div class="col-sm-9">
                    <input type="number" name="harga" min="1" class="form-control @error('harga') is-invalid @enderror" id="jml" placeholder="Contoh : Rp. 19.000">
                    @error('harga')
                            <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>                                 
                <div class="form-group row">
                    <label for="hari" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-2 mb-2">
                    <select id="hari" name="hari" class="form-control">
                        <option value="" selected>Hari</option>
                        @for ($i = 1; $i < 31; $i++)                                
                            @if( $i < 10 )
                            <option value="0{{ $i }}">0{{ $i }}</option>
                            @else
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                        @endfor
                    </select>
                            @error('hari')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-2 mb-2">
                    <select id="bulan" name="bulan" class="form-control">
                          <option value="" selected>bulan</option>
                          @for ($b = 1; $b <= 12; $b++)                                
                                @if($b < 10)
                                <option value="0{{ $b }}">0{{ $b }}</option>
                                @else
                                <option value="{{ $b }}">{{ $b }}</option>
                                @endif
                            @endfor
                        </select>
                            @error('bulan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-2 mb-2">
                    <select id="tahun" name="tahun" class="form-control">
                          <option value="" selected>tahun</option>
                          @for ($b = 2000; $b <= now()->format('Y') ; $b++)                                
                                <option value="{{ $b }}">{{ $b }}</option>
                            @endfor
                        </select>
                            @error('tahun')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>                                                                                                       
                      
                     
                <div class="form-group row">
                    <label for="tgl" class="col-sm-3 col-form-label">Bukti</label>
                    <div class="col-sm-9">                                                
                            <input type="file" class="form-control @error('tanggal') is-invalid @enderror" name="bukti" id="customFile" accept=".jpg, .png, .jpeg">                                                    
                            <small>File harus memiliki format jpg | png | jpeg </small>
                    </div>
                            @error('bukti')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                    </div>
                </div>                
                

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
            </div>
            </form>                
        </div>
    </div>
@endsection