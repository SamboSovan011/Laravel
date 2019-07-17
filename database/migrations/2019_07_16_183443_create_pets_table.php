<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 225);
            $table->integer('qty');
            $table->integer('price');
            $table->string('description', 225);
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
