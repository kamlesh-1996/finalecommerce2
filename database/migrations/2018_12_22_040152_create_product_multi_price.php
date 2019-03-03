<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductMultiPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_multi_pricies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('product_multi_pricies');
    }
}
