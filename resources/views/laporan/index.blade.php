@extends('layouts.app')
@section('title','Dashboard Kantin | Laporan')
@section('pageTitle','Laporan')
@section('content')
    <div class="container">
    @if (session('notif'))          
          <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              {{ session('notif') }}
            </div>
          </div>
    @endif
        <div class="card">
            <div class="card-header">Laporan Pengeluaran & Pembelian</div>                                 
            <div class="card-body">
            <div class="row">
              <div class="col-lg-2">
              <a href="{{ route('print')}}" class="btn btn-sm btn-danger d-block"> Cetak Laporan</a>  
              </div>
            </div>
            <small>Laporan otomatis dibuat sesuai bulan saat ini</small>
            <div class="row">                                  
        </div>
            <div class="section-title">Pembelian</div>
                    <div class="table-responsive">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tanggal</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($pembelian as $p)
                          <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $p->nama_barang}}</td>
                            <td>{{ $p->jumlah}}</td>
                            <td>Rp. {{ $p->harga}}</td>
                            <td>{{ $p->hari}}-{{ $p->bulan}}-{{ $p->tahun}}</td>                                                        
                          </tr>
                          @endforeach                          
                        </tbody>
                      </table>
                    </div>
                    <div class="section-title">Pengeluaran</div>
                    <div class="table-responsive">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>                            
                            <th scope="col">Tanggal</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($pengeluaran as $p)
                          <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $p->nama_barang}}</td>
                            <td>{{ $p->jumlah}}</td>                            
                            <td>{{ $p->hari}}-{{ $p->bulan}}-{{ $p->tahun}}</td>                                                        
                          </tr>
                          @endforeach                          
                        </tbody>
                      </table>                      
                    </div>
            </div>            
        </div>
        
    </div>
@endsection