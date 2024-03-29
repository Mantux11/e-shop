<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class discountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            'products_id' => 1,
            'percentage'=> 24,
            'from' => '2021-03-16',
            'to' => '2021-04-25'
        ]);
        DB::table('discounts')->insert([
            'products_id' => 2,
            'percentage'=> 4,
            'from' =>  '2021-03-07',
            'to' =>  '2021-05-08'
        ]);
        DB::table('discounts')->insert([
            'products_id' => 3,
            'percentage'=> 0,
            'from' =>  '2021-03-08',
            'to' =>  '2021-03-14'
        ]);
        DB::table('discounts')->insert([
            'products_id' => 4,
            'percentage'=> 0,
            'from' =>  '2021-03-07',
            'to' =>  '2021-03-15'
        ]);
        DB::table('discounts')->insert([
            'products_id' => 5,
            'percentage'=> 0,
            'from' =>  '2021-01-08',
            'to' =>  '2021-05-16'
        ]);
        DB::table('discounts')->insert([
            'products_id' => 6,
            'percentage'=> 0,
            'from' =>  '2021-03-07',
            'to' =>  '2021-03-15'
        ]);
        DB::table('discounts')->insert([
            'products_id' => 7,
            'percentage'=> 0,
            'from' =>  '2021-03-07',
            'to' =>  '2021-03-15'
        ]);
        DB::table('discounts')->insert([
            'products_id' => 8,
            'percentage'=> 0,
            'from' =>  '2021-03-07',
            'to' =>  '2021-03-15'
        ]);
        DB::table('discounts')->insert([
            'products_id' => 9,
            'percentage'=> 0,
            'from' =>  '2021-03-07',
            'to' =>  '2021-03-15'
        ]);
        DB::table('discounts')->insert([
            'products_id' => 10,
            'percentage'=> 0,
            'from' =>  '2021-03-07',
            'to' =>  '2021-03-15'
        ]);
    }
}
