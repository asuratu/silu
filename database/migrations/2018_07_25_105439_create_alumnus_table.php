<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnus', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('cate_id');
            $table->string('title');
            $table->string('img');
            $table->string('description')->nullable();
            $table->text('body');
            $table->string('recommend_img')->nullable();
            $table->integer('recommend')->nullable();
            $table->integer('sort')->default(0);
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
        Schema::dropIfExists('alumnus');
    }
}
