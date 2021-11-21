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
            ->create(['name' => 'Huawei P40 lite 128GB',
                'category' => 'huawei']);
        Product::factory()->count(20)
            ->create(['name' => 'Xiaomi Mi 11 256GB',
                'category' => 'xiaomi']);
        Product::factory()->count(20)
            ->create(['name' => 'OnePlus 8T 256 GB',
                'category' => 'oneplus']);
        Product::factory()->count(20)
            ->create(['name' => 'LG Velvet 4G 6GB/128GBB',
                'category' => 'lg']);

//        Product::factory()->count(20)->create();
//        Product::factory()->count(20)->create();
    }
}
