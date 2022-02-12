<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->foreignId('user_id');
            $table->longText('title');
            $table->longText('sort_description');
            $table->longText('long_description');
            $table->integer('image');
            $table->longText('slug');
            $table->string('type');
            $table->float('price');
            $table->string('sku');
            $table->string('quantity');
            $table->string('accepting_order_type');
            $table->float('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->timestamp('discount_start')->nullable();
            $table->timestamp('discount_end')->nullable();
            $table->timestamps();
        });
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
