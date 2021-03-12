<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table ='beli';
    protected $fillable =[
        'nama_barang','harga','jumlah','bukti','hari','bulan','tahun'
    ];
}
