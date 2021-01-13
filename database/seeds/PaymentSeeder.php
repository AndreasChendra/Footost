<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([

            [
                'name' => 'OVO',
                'picture' => 'images/payment/ovo.jpg'
            ],

            [
                'name' => 'DANA',
                'picture' => 'images/payment/dana.jpg'
            ],

            [
                'name' => 'GOPAY',
                'picture' => 'images/payment/gopay.png'
            ],

            [
                'name' => 'LinkAja',
                'picture' => 'images/payment/linkaja.jpg'
            ],

        ]);
    }
}
