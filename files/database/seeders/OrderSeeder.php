<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            [
                'ototal' => '2800',
                'created_at' => now()
            ],
            [
                'ototal' => '150',
                'created_at' => now()
            ],
            [
                'ototal' => '140',
                'created_at' => now()
            ],
            [
                'ototal' => '15',
                'created_at' => now()
            ],
            [
                'ototal' => '1960',
                'created_at' => now()
            ],
            [
                'ototal' => '20',
                'created_at' => now()
            ],
            [
                'ototal' => '60',
                'created_at' => now()
            ],
            [
                'ototal' => '3750',
                'created_at' => now()
            ],
            [
                'ototal' => '1535',
                'created_at' => now()
            ]
        ]);
    }
}
