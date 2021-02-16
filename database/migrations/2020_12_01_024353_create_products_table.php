<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path');
            $table->string('product_name');
            $table->string('season');
            $table->decimal('latitude',15,12);
            $table->decimal('longitude',15,12);
            $table->text('cityName');
            $table->integer('flag');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('image');
    }
}
