<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([

            [
                'store_id' => '4',
                'user_id' => '4',
                'description' => 'enak kopi starbucknya',
                'picture' => 'images/foodndrink/cafe/starbucks.jpg',
                'rating' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'store_id' => '5',
                'user_id' => '4',
                'description' => 'cafe yang nyaman buat kerjain tugas',
                'picture' => 'images/foodndrink/cafe/arborea.jpg',
                'rating' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
