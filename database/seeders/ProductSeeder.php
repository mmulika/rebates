<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Product::create([
        'name'=>'sammybot',
        'price'=>300,
        'description'=>'high returns bot',
        'image'=>'https://images.unsplash',
    ]);

    product::create([
        'name'=>'blaisebot',
        'price'=> 2000,
        'description'=>'4ticks high yard',
        'image'=>'url',



    ])

    }
}
