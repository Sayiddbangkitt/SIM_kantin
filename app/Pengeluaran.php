<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'keluar';
    protected $fillable = ['nama_barang','jumlah','hari','bulan','tahun'];
}
