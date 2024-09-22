<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Carbon\Carbon;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tamu = [
            ['tanggal' => '2024-09-21', 'nama' => 'bima', 'asal_tamu' => 'garut', 'uraian' => 'kebutuhan khusus'],
            ['tanggal' => '2024-09-22', 'nama' => 'rayfal', 'asal_tamu' => 'bandung', 'uraian' => 'pkl'],
            ['tanggal' => '2024-09-23', 'nama' => 'trisna', 'asal_tamu' => 'cilawu', 'uraian' => 'sesuatu penting'],
        ];
        DB::table('tamu')->insert($tamu);
    }
}
