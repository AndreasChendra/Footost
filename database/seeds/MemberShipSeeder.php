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
                'duration' => '1',
                'price' => '25000'
            ],

            [
                'name' => 'Regular',
                'duration' => '3',
                'price' => '75000'
            ],

            [
                'name' => 'Medium',
                'duration' => '5',
                'price' => '100000'
            ],

            [
                'name' => 'Special',
                'duration' => '9',
                'price' => '150000'
            ],

            [
                'name' => 'Expert',
                'duration' => '12',
                'price' => '200000'
            ],

        ]);
    }
}
