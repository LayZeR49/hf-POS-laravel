<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderdetail')->insert([
            [
                'oid' => '1',
                'iid' => '7',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '1',
                'iid' => '8',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '2',
                'iid' => '1',
                'iqty' => '10',
                'created_at' => now()
            ],
            [
                'oid' => '3',
                'iid' => '4',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '3',
                'iid' => '5',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '4',
                'iid' => '1',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '5',
                'iid' => '2',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '5',
                'iid' => '7',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '5',
                'iid' => '6',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '6',
                'iid' => '5',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '7',
                'iid' => '6',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '8',
                'iid' => '8',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '8',
                'iid' => '7',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '8',
                'iid' => '9',
                'iqty' => '1',
                'created_at' => now()
            ],
            [
                'oid' => '9',
                'iid' => '1',
                'iqty' => '5',
                'created_at' => now()
            ],
            [
                'oid' => '9',
                'iid' => '2',
                'iqty' => '2',
                'created_at' => now()
            ],
            [
                'oid' => '9',
                'iid' => '5',
                'iqty' => '3',
                'created_at' => now()
            ]
        ]);
    }
}
