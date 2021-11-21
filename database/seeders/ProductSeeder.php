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
        //samsung
        Product::factory()->count(20)->create();
        //apple
        Product::factory()->count(20)
            ->create(['name' => 'Apple iPhone X 256GB',
                      'category' => 'apple']);
        Product::factory()->count(20)
            ->create(['name' => 'Apple iPhone X 256GB',
                'category' => 'huawei']);
        Product::factory()->count(20)
            ->create(['name' => 'Apple iPhone X 256GB',
                'category' => 'xiaomi']);
        Product::factory()->count(20)
            ->create(['name' => 'Apple iPhone X 256GB',
                'category' => 'oneplus']);
        Product::factory()->count(20)
            ->create(['name' => 'Apple iPhone X 256GB',
                'category' => 'lg']);

//        Product::factory()->count(20)->create();
//        Product::factory()->count(20)->create();
    }
}
