<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rencana extends Model
{
    protected $table = 'perencanaan';
    protected $fillable = ['nama_barang','jumlah','tanggal'];
}
