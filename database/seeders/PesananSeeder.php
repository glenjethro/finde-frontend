<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pesanans')->insert([
            'totalHarga' => 10000,
            'idUser' => 1
        ]);

        DB::table('pesanans')->insert([
            'totalHarga' => 12345,
            'idUser' => 3
        ]);
    }
}
