<?php

use Illuminate\Database\Seeder;

class MemberShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memberships')->insert([

            [
                'name' => 'Capable',
                'duration' => '1 Month',
                'price' => '25000'
            ],

            [
                'name' => 'Regular',
                'duration' => '3 Month',
                'price' => '75000'
            ],

            [
                'name' => 'Medium',
                'duration' => '5 Month',
                'price' => '100000'
            ],

            [
                'name' => 'Special',
                'duration' => '9 Month',
                'price' => '150000'
            ],

            [
                'name' => 'Expert',
                'duration' => '12 Month',
                'price' => '200000'
            ],

        ]);
    }
}
