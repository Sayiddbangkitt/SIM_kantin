<?php

use Illuminate\Database\Seeder;
use App\Pengeluaran;

class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengeluaran::create([
            'nama_barang' => 'Terigu',
            'jumlah' => '10',
            'tanggal' =>  now()
           ]);
    }
}
