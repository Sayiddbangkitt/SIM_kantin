<?php

use Illuminate\Database\Seeder;
use App\Rencana;

class RencanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rencana::create([
         'nama_barang' => 'Terigu',
         'jumlah' => '10',
         'tanggal' =>  now()
        ]);
    }
}
