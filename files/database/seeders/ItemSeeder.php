<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            [
                'iname' => 'Treats',
                'iprice' => '15',
                'iquantity' => '8',
                'cid' => '1',
                'created_at' => now()
            ],
            [
                'iname' => 'Aquarium',
                'iprice' => '700',
                'iquantity' => '20',
                'cid' => '4',
                'created_at' => now()
            ],
            [
                'iname' => 'Guinea Pig',
                'iprice' => '200',
                'iquantity' => '50',
                'cid' => '3',
                'created_at' => now()
            ],
            [
                'iname' => 'Bird',
                'iprice' => '120',
                'iquantity' => '40',
                'cid' => '3',
                'created_at' => now()
            ],
            [
                'iname' => 'Fish',
                'iprice' => '20',
                'iquantity' => '121',
                'cid' => '3',
                'created_at' => now()
            ],
            [
                'iname' => 'Hamster',
                'iprice' => '60',
                'iquantity' => '82',
                'cid' => '3',
                'created_at' => now()
            ],
            [
                'iname' => 'Dog',
                'iprice' => '1200',
                'iquantity' => '24',
                'cid' => '3',
                'created_at' => now()
            ],
            [
                'iname' => 'Cat',
                'iprice' => '1600',
                'iquantity' => '20',
                'cid' => '3',
                'created_at' => now()
            ],
            [
                'iname' => 'Rabbit',
                'iprice' => '950',
                'iquantity' => '26',
                'cid' => '3',
                'created_at' => now()
            ],
            [
                'iname' => 'Balls',
                'iprice' => '25',
                'iquantity' => '132',
                'cid' => '2',
                'created_at' => now()
            ]
        ]);
    }
}
