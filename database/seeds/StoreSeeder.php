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
                'category_id' => '1',
                'user_id' => '3',
                'name' => 'Arborea Cafe',
                'picture' => 'images/foodndrink/cafe/arborea.jpg',
                'address' => 'SkyLife, Jakarta Selatan',
                'type' => 'Cafe',
                'description' => '12.00 - 20.00',
                'price' => '75000',
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
                'description' => 'CoffeMix emang juara, minuman khas usia remaja',
                'price' => '12000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '5',
                'user_id' => '4',
                'name' => 'Toserba Borma Dakota Pasteur',
                'picture' => 'images/toserba/borma.jpg',
                'address' => 'Four Square, Bandung',
                'type' => 'Toserba',
                'description' => 'Toserba menjual berbagai macam barang serba ada',
                'price' => '67500',
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
                'description' => 'ATK Qita menjual berbagai macam keperluan untuk menulis, dan alat tulis lainnya',
                'price' => '15000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '4',
                'user_id' => '4',
                'name' => 'Rak Mini 4 Sekat Alat Tulis Kantor',
                'picture' => 'images/atk/rakmini.jpg',
                'address' => 'Tangerang',
                'type' => 'Alat Tulis Kantor',
                'description' => 'Rak Mini yang bisa digunakan untuk menyimpan alat tulis dan lain sebagainya',
                'price' => '12400',
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
                'description' => 'Nasi Padang adalah nasi putih yang disajikan dengan berbagai macam lauk pauk khas Indonesia',
                'price' => '23000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => '2',
                'user_id' => '4',
                'name' => 'Mie Ayam Kuah',
                'picture' => 'images/foodndrink/makanan/mieayam.jpg',
                'address' => 'Jakarta Utara',
                'type' => 'Makanan Berat',
                'description' => 'Mi ayam atau bakmi ayam adalah masakan Indonesia yang terbuat dari mi kuning direbus mendidih kemudian ditaburi saus kecap khusus beserta daging ayam dan sayuran',
                'price' => '18500',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);

    }
}
