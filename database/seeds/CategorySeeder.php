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
                'name' => 'Makanan Berat'
            ],

            [
                'name' => 'Kost'
            ],

            [
                'name' => 'Alat Tulis Kantor'
            ],

            [
                'name' => 'Toserba'
            ],

        ]);
        
    }
}
