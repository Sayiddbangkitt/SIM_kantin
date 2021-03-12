<?php

use Illuminate\Database\Seeder;
use App\Pembelian;
class BeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembelian::create([
            'nama_barang' => 'terigu',
            'jumlah' => '10',
            'harga' => '2000',
            'tanggal' => now(),
            'bukti' => 'wk.png',
        ]);
    }
}
