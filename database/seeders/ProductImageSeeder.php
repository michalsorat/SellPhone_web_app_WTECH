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
        $productImages = [
            [
                'image_src' => 'img/iphone.png',
                'product_id' => '1'
            ]
        ];

        foreach ($productImages as $productImage) {
            ProductImage::create(array(
                'image_src' => $productImage['image_src'],
                'product_id' => $productImage['product_id']
            ));
        }
    }
}
