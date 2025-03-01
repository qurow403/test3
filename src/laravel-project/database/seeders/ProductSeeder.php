<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Productモデル読み込み
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(10)->create();
    }
}
