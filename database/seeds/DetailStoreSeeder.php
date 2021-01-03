<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DetailStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_stores')->insert([

            [
                'store_id' => '1',
                'category' => 'Putra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'store_id' => '2',
                'category' => 'Putra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'store_id' => '3',
                'category' => 'Putri',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
