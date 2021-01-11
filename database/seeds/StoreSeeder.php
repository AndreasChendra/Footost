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
                'picture' => 'images/kostan/palmerah.jpg',
                'address' => 'Jl. Kemanggisan Sebrang BINUS',
                'type' => 'Putra',
                'description' => 'ruangan ber ac, nyaman tp kecil',
                'price' => '1500000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '3',
                'user_id' => '2',
                'name' => 'Kost Melrose Place 7',
                'picture' => 'images/kostan/melrose.jpg',
                'address' => 'Jl. Kemanggisan Barat',
                'type' => 'Putra',
                'description' => 'ruangan ber ac, nyaman tp kecil, kamar mandi dalam',
                'price' => '3000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '3',
                'user_id' => '2',
                'name' => 'Kost Batusari Tipe A',
                'picture' => 'images/kostan/batusari.jpg',
                'address' => 'Jl. Palmerah Barat',
                'type' => 'Putri',
                'description' => 'listrik sepuasnya, kamar mandi luar, ruangan ber ac, nyaman tp kecil',
                'price' => '5000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '1',
                'user_id' => '3',
                'name' => 'Starbucks Coffee Living World',
                'picture' => 'images/foodndrink/cafe/starbucks.jpg',
                'address' => 'Living World Pekanbaru',
                'type' => 'Cafe',
                'description' => '09.00 - 20.00',
                'price' => '50000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '5',
                'user_id' => '3',
                'name' => 'Indocafe CoffeeMix',
                'picture' => 'images/toserba/coffeemix.jpg',
                'address' => 'Jati Sampurna, Jawa Barat',
                'type' => 'Toserba',
                'description' => '9496',
                'price' => '12000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '4',
                'user_id' => '3',
                'name' => 'ATK Qita',
                'picture' => 'images/atk/atkqita.jpg',
                'address' => 'Jakarta Raya',
                'type' => 'Alat Tulis Kantor',
                'description' => '12345',
                'price' => '15000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '2',
                'user_id' => '3',
                'name' => 'Nasi Padang Arengka',
                'picture' => 'images/foodndrink/makanan/nasipadang.jpg',
                'address' => 'Jakarta Timur',
                'type' => 'Makanan Berat',
                'description' => 'blablablabla',
                'price' => '23000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);

    }
}
