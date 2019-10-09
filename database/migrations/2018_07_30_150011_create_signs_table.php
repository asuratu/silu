<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->string('name');
            $table->string('sex');
            $table->string('img');
            $table->string('birthplace');
            $table->string('ethnic');
            $table->string('unit');
            $table->string('main_position');
            $table->string('id_card');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('introduction');
            $table->string('company_intro');
            $table->string('file1');
            $table->string('file2');
            $table->string('file3');
            $table->string('file4');
            $table->string('file5');
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
        Schema::dropIfExists('signs');
    }
}
