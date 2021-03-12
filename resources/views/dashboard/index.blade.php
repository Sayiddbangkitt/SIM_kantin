@extends('layouts.app')
@section('pageTitle','Dashboard')
@section('title','Dashboard Kantin')
@section('content')
<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-cart-plus"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Rencana Pembelian</h4>
                  </div>
                  <div class="card-body">
                    {{ $rencana->count() }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Pembelian</h4>
                  </div>
                  <div class="card-body">
                    {{ $pembelian->count() }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Pengeluaran</h4>
                  </div>
                  <div class="card-body">
                    {{ $pengeluaran->count() }}
                  </div>
                </div>
              </div>
            </div>
            
          </div>
@endsection