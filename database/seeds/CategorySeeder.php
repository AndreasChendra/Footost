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
            
            [
                'name' => 'Cafe'
            ],

            [
                'name' => 'Heavy Food'
            ],

            [
                'name' => 'Boarding House'
            ],

            [
                'name' => 'Office Stationary'
            ],

            [
                'name' => 'Department Store'
            ],

        ]);
        
    }
}
