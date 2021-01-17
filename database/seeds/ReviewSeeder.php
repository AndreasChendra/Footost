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
                'store_id' => '1',
                'user_id' => '3',
                'description' => 'kamarnya bersih, nyaman, dan sesuai dengan deskripsi',
                'picture' => 'images/kostan/palmerah.jpg',
                'rating' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'store_id' => '2',
                'user_id' => '3',
                'description' => 'kamarnya nyaman ditinggal, dan sesuai dengan deskripsi',
                'picture' => 'images/kostan/melrose.jpg',
                'rating' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'store_id' => '3',
                'user_id' => '3',
                'description' => 'kamarnya sangat mewah, cocok untuk ditinggal',
                'picture' => 'images/kostan/batusari.jpg',
                'rating' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

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

            [
                'store_id' => '6',
                'user_id' => '3',
                'description' => 'barang kemasan sesuai dengan yang dijual belikan diwebsite',
                'picture' => 'images/toserba/coffeemix.jpg',
                'rating' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'store_id' => '7',
                'user_id' => '3',
                'description' => 'kebersihan perlu ditingkatkan supaya nyaman pergi belanja',
                'picture' => 'images/toserba/borma.jpg',
                'rating' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'store_id' => '8',
                'user_id' => '2',
                'description' => 'alat tulis yang bagus',
                'picture' => 'images/atk/atkqita.jpg',
                'rating' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'store_id' => '9',
                'user_id' => '2',
                'description' => 'rak mini multifungsi bisa dipakai untuk simpan apa saja',
                'picture' => 'images/atk/rakmini.jpg',
                'rating' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'store_id' => '10',
                'user_id' => '2',
                'description' => 'nasi padang paling best yang pernah dikunjungi',
                'picture' => 'images/foodndrink/makanan/nasipadang.jpg',
                'rating' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'store_id' => '11',
                'user_id' => '3',
                'description' => 'mie ayam yang enak',
                'picture' => 'images/foodndrink/makanan/mieayam.jpg',
                'rating' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
