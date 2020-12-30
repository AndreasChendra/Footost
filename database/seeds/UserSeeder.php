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
            'name' => 'admin',
            'email' => 'admin@footost.com',
            'password' => bcrypt('admin'),
            'place_of_birth' => 'admin',
            'date_of_birth' => '2000-12-12',
            'img_profile' => 'admin',
            'phone_number' => '08000000000',
            'gender' => 'admin',
            'vip_expired' => Carbon::now()->modify('+10 year'),
            'role_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'user 1',
            'email' => 'user1@footost.com',
            'password' => bcrypt('user1'),
            'place_of_birth' => 'Jakarta',
            'date_of_birth' => '1945-07-17',
            'img_profile' => 'user1',
            'phone_number' => '08123456789',
            'gender' => 'admin',
            'vip_expired' => Carbon::now()->modify('+1 month'),
            'role_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
