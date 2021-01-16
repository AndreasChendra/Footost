<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(MemberShipSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(PromoSeeder::class);
    }
}
