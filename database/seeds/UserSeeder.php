<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@footost.com',
            'password' => bcrypt('admin'),
            'place_of_birth' => 'Singapura',
            'date_of_birth' => '2000-12-12',
            'img_profile' => 'profile.jpg',
            'phone_number' => '08000000000',
            'gender' => 'Male',
            'vip_expired' => Carbon::now()->modify('+10 year'),
            'role_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Budian',
            'email' => 'budian@footost.com',
            'password' => bcrypt('budian1'),
            'place_of_birth' => 'Jakarta',
            'date_of_birth' => '1945-07-17',
            'img_profile' => 'profile.jpg',
            'phone_number' => '08123456789',
            'gender' => 'Male',
            'vip_expired' => Carbon::now()->modify('+1 month'),
            'role_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Fransjaya',
            'email' => 'fransjaya@footost.com',
            'password' => bcrypt('fransjaya1'),
            'place_of_birth' => 'Meikarta',
            'date_of_birth' => '2005-05-05',
            'img_profile' => 'profile.jpg',
            'phone_number' => '081298765432',
            'gender' => 'Male',
            'vip_expired' => Carbon::now()->modify('+1 month'),
            'role_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
