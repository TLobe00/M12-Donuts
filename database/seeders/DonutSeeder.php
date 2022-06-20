<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donuts = [
            [
                'name' => 'Caramel Glaze',
                'image_url' => 'https://images.unsplash.com/photo-1609873539821-3b46e00a0313?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=776&q=80',
            ],
            [
                'name' => 'Purple Birthday Cake',
                'image_url' => 'https://images.unsplash.com/photo-1582293041079-7814c2f12063?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
            ],
            [
                'name' => 'Chocolate Chocolate Chip',
                'image_url' => 'https://images.unsplash.com/photo-1579761314336-f27ea6297ae1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
            ],
            [
                'name' => 'Tiffany\'s Sprinkles',
                'image_url' => 'https://images.unsplash.com/photo-1631397833242-fc6213046352?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
            ],
        ];
        foreach ($donuts as $donut) {
            DB::table('donuts')->insert(
                [
                    'name' => $donut['name'],
                    'image_url' => $donut['image_url'],
                ]
            );
        }
    }
}
