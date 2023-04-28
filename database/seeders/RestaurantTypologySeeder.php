<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RestaurantTypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurant_typology')->insert([
            array('restaurant_id' => 1, 'typology_id' => 1),
            array('restaurant_id' => 2, 'typology_id' => 2),
            array('restaurant_id' => 3, 'typology_id' => 3),
            array('restaurant_id' => 4, 'typology_id' => 4),
            array('restaurant_id' => 5, 'typology_id' => 5),
            array('restaurant_id' => 6, 'typology_id' => 6),
            array('restaurant_id' => 7, 'typology_id' => 7),
            array('restaurant_id' => 8, 'typology_id' => 8),
            array('restaurant_id' => 9, 'typology_id' => 9),
            array('restaurant_id' => 10, 'typology_id' => 1),
            array('restaurant_id' => 11, 'typology_id' => 2),
            array('restaurant_id' => 12, 'typology_id' => 3),
            array('restaurant_id' => 13, 'typology_id' => 4),
            array('restaurant_id' => 14, 'typology_id' => 5),
            array('restaurant_id' => 15, 'typology_id' => 6),
            array('restaurant_id' => 16, 'typology_id' => 7),
            array('restaurant_id' => 17, 'typology_id' => 8),
            array('restaurant_id' => 17, 'typology_id' => 1),
            array('restaurant_id' => 18, 'typology_id' => 9),
            array('restaurant_id' => 19, 'typology_id' => 1),
            array('restaurant_id' => 20, 'typology_id' => 2),
            array('restaurant_id' => 21, 'typology_id' => 3),
            array('restaurant_id' => 22, 'typology_id' => 4),
            array('restaurant_id' => 23, 'typology_id' => 5),
            array('restaurant_id' => 24, 'typology_id' => 6),
            array('restaurant_id' => 25, 'typology_id' => 7),
            array('restaurant_id' => 26, 'typology_id' => 8),
            array('restaurant_id' => 27, 'typology_id' => 9),
        ]);
    }
}
