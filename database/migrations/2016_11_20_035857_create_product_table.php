<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
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
          $table->string('title');
          $table->string('photo_1');
          $table->string('photo_2')->nulleable();
          $table->string('photo_3')->nulleable();
          $table->string('photo_4')->nulleable();
          $table->string('photo_5')->nulleable();
          $table->string('description');
          $table->string('prize');
          $table->integer('id_user');
          $table->integer('id_category');
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
        Schema::drop('products');
    }
}
