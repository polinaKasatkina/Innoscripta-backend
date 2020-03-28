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
        \App\Models\Category::create([
            'name' => 'pizza'
        ]);

        \App\Models\Category::create([
            'name' => 'drinks'
        ]);

        \App\Models\Category::create([
            'name' => 'salads'
        ]);
    }
}
