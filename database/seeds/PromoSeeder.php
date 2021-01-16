<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promos')->insert([

            [
                'title' => 'Diskon 20% Semua Cafe',
                'description' => 'Mau ngerasain nongkrong ke tempat yang nyaman dan tenang? Bisa banget, dong! Supaya kantong nggak jadi kering, ada promo menarik yang nggak boleh kamu lewatin, nih.',
                'termncon' => 'Tunjukkan Promo ini di semua cafe dan dapatkan potongan 20% hingga Rp. 20.000',
                'end_date' => Carbon::now()->modify('+1 month'),
            ],

            [
                'title' => 'Diskon 50% Semua ATK',
                'description' => 'Mau sekolah tapi alat tulis mahal? Supaya kantong nggak jadi kering, ada promo menarik nih',
                'termncon' => 'Tunjukkan Promo ini di semua ATK yang terdaftar di Footost dan dapatkan potongan 50% hingga Rp. 10.000',
                'end_date' => Carbon::now()->modify('+2 month'),
            ],

        ]);
    }
}
