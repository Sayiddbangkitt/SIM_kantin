@extends('layouts.app')
@section('title','Dashboard Kantin | Pembelian')
@section('pageTitle','Pembelian')
@section('content')
<div class="container-fluid">
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
                  <div class="card-header">
                    <h4>Data Perencanaan</h4>
                  </div>                  
                  <div class="card-body">                         
                  <a href="{{ route('pembelian.create') }}" class="btn btn-success"> <i class="fas fa-plus"></i>  Tambah</a>                                   
                    <div class="section-title">Data Pembelian</div>
                    <div class="table-responsive">
                      <table class="table table-sm table-hover table-striped">
                        <thead class="bg-info text-white">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Tanggal</th>                                                        
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($beli->count()>=1)
                            @foreach($beli as $r)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $r->nama_barang}}</td>                            
                              <td>{{ $r->hari}} - {{ $r->bulan}} - {{ $r->tahun}}</td>                                                                                                  
                              <td>
                                  <a href="{{ route('pembelian.show',$r->id) }}" class="btn btn-warning"> <i class="fas fa-th"></i> detail</a>
                                  <form action="{{ route('pembelian.destroy',$r->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</button>
                                  </form>
                              </td>                            
                            </tr>                          
                            @endforeach
                          @else
                          <tr>
                           <td colspan="5" class="text-center">Data Kosong</td>
                          </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
    </div>
</div>
@endsection