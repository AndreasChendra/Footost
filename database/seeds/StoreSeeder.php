<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('stores')->insert([

            [
                'category_id' => '3',
                'user_id' => '2',
                'name' => 'Kost Palmerah Residence',
                'picture' => 'images/kostan/kos1.jpg',
                'address' => 'Jl. Kemanggisan Sebrang BINUS',
                'description' => 'ruangan ber ac, nyaman tp kecil',
                'price' => '1500000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '3',
                'user_id' => '2',
                'name' => 'Kost Melrose Place 7',
                'picture' => 'images/kostan/kos1.jpg',
                'address' => 'Jl. Kemanggisan Barat',
                'description' => 'ruangan ber ac, nyaman tp kecil, kamar mandi dalam',
                'price' => '3000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '3',
                'user_id' => '2',
                'name' => 'Kost Batusari Tipe A',
                'picture' => 'images/kostan/kos1.jpg',
                'address' => 'Jl. Palmerah Barat',
                'description' => 'listrik sepuasnya, kamar mandi luar, ruangan ber ac, nyaman tp kecil',
                'price' => '5000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);

    }
}
