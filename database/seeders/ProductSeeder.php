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
        $products = [
            [
                'name' => 'Samsung Galaxy S21, 5G 8GB/128GB',
                'category' => 'Samsung',
                'price' => '999,99',
                'short_description' => '6.2" AMOLED 2400 × 1080, 120Hz, procesor Qualcomm Snapdragon 8- jadrový, RAM 8GB,
                interná pamäť 128GB, MicroSD až 1000 GB, zadný fotoaparát 64Mpx (f/1.8)+12Mpx (f/2.2)+5Mpx (f/2.4)+5Mpx
                (f/2.4) , predný fotoaparát 32Mpx, optická stabilizácia, GPS',
                'available_amount' => '69'
            ]
        ];

        foreach ($products as $product) {
            Product::create(array(
                'name' => $product['name'],
                'category' => $product['category'],
                'price' => $product['price'],
                'short_description' => $product['short_description'],
                'available_amount' => $product['available_amount']
            ));
        }
    }
}
