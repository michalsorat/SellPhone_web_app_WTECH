<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::factory()->count(20)->create();
        ProductImage::factory()->count(20)
            ->create(['image_src' => 'img/iphone_next_photo.png',
                      'main_img' => false]);
        ProductImage::factory()->count(20)
            ->create(['image_src' => 'img/iphone_next_next_photo.png',
                      'main_img' => false]);;
    }
}
