<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowersTable extends Migration
{
    public function up()
    {
        Schema::create('flowers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('detail');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('flowers');
    }
}
