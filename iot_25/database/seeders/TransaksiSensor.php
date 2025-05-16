<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TransaksiSensor extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi_sensor')->insert([
            [
                'nama_sensor' => 'Sensor Suhu',
                'nilai1' => rand(20, 100),
                'nilai2' => rand(20, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sensor' => 'Sensor Kelembaban',
                'nilai1' => rand(30, 90),
                'nilai2' => rand(30, 90),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sensor' => 'Sensor Tekanan',
                'nilai1' => rand(50, 150),
                'nilai2' => rand(50, 150),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
