<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentsTable extends Migration
{
    public function up()
    {
        Schema::create('presents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->string('reword');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('presents');
    }
}
