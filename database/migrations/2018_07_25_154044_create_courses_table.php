<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('cate_id');
            $table->string('name');
            $table->string('intro')->nullable();
//            $table->string('start_time');
//            $table->string('edu_system');
//            $table->string('sign_way');
//            $table->string('sign_cond');
//            $table->text('advisory');
//            $table->text('welfare');
            $table->string('sign_table');
            $table->string('letter');

            $table->integer('recommend');
            $table->integer('sort')->default(0);
            $table->string('recommend_img')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
