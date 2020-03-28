<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
            'name' => 'Margarita',
            'category_id' => 1,
            'description' => 'Cheese, tomatoes',
            'price' => '10'
        ]);

        \App\Models\Product::create([
            'name' => 'Pepperoni',
            'category_id' => 1,
            'description' => 'Cheese, tomatoes, pepperoni sausages',
            'price' => '12'
        ]);

        \App\Models\Product::create([
            'name' => 'Four cheeses',
            'category_id' => 1,
            'description' => 'Tomatoes, mozzarella, cheddar, gorgonzola, parmesan',
            'price' => '15'
        ]);

        \App\Models\Product::create([
            'name' => 'Ham & Cheese',
            'category_id' => 1,
            'description' => 'Tomatoes, ham, cheese',
            'price' => '12.5'
        ]);

        \App\Models\Product::create([
            'name' => 'Maxicana',
            'category_id' => 1,
            'description' => 'Tomatoes, ham, chicken, mushrooms, chili pepper',
            'price' => '15'
        ]);

        \App\Models\Product::create([
            'name' => 'Veggie',
            'category_id' => 1,
            'description' => 'Tomatoes, mushrooms, sweet pepper, mozzarella',
            'price' => '11'
        ]);

        \App\Models\Product::create([
            'name' => 'BBQ',
            'category_id' => 1,
            'description' => 'Tomatoes, chicken, onion, barbecue sauce',
            'price' => '16'
        ]);

        \App\Models\Product::create([
            'name' => 'Super Meat',
            'category_id' => 1,
            'description' => 'Tomatoes, ham, chicken, pepperoni, pork, onion',
            'price' => '20'
        ]);

        \App\Models\Product::create([
            'name' => 'Vegetable salad',
            'category_id' => 3,
            'description' => 'tomato, cucumber, pepper, salad',
            'price' => '10'
        ]);

        \App\Models\Product::create([
            'name' => 'Cesar',
            'category_id' => 3,
            'description' => 'tomato, cucumber, pepper, salad, chicken, souse cesar',
            'price' => '12'
        ]);

        \App\Models\Product::create([
            'name' => 'Coke',
            'category_id' => 2,
            'description' => '',
            'price' => '2.5'
        ]);

        \App\Models\Product::create([
            'name' => 'Apple juice',
            'category_id' => 2,
            'description' => '',
            'price' => '1.5'
        ]);

        \App\Models\Product::create([
            'name' => 'Orange juice',
            'category_id' => 2,
            'description' => '',
            'price' => '1.5'
        ]);
    }
}
