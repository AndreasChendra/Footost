<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Cafe'
        ]);

        DB::table('categories')->insert([
            'name' => 'Heavy Food'
        ]);

        DB::table('categories')->insert([
            'name' => 'Boarding House'
        ]);

        DB::table('categories')->insert([
            'name' => 'Office Stationary'
        ]);

        DB::table('categories')->insert([
            'name' => 'Department Store'
        ]);

        
    }
}
