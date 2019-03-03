<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('product_code')->nullable();
            $table->longText('slug')->nullable();
            $table->string('category_id')->nullable();
            $table->mediumText('title')->nullable();
            $table->mediumText('sub_title')->nullable();
            $table->string('qty')->default(0)->nullable();
            $table->string('price')->default(0)->nullable();
            $table->enum('multi_price',['Yes','No'])->default('No')->nullable();
            $table->mediumText('images')->nullable();
            $table->mediumText('attachment')->nullable();
            $table->longText('description')->nullable();
            $table->enum('inStock',['Yes','No'])->default('Yes');
            $table->enum('isDeleted',['Yes','No'])->default('No');
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
