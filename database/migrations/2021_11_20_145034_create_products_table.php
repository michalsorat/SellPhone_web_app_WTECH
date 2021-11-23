<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->boolean('top_product');
            $table->boolean('best_price');
            $table->boolean('discount');
            $table->float('price', 6, 2);
            $table->longText('short_description');
            $table->integer('available_amount');
            $table->timestamps();
        });

//        DB::statement('ALTER TABLE products ADD FULLTEXT fulltext_index (name, category, short_description)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
