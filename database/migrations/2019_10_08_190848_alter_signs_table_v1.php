<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSignsTableV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signs', function (Blueprint $table) {
            $table->integer('course_id')->default(0)->change();
            $table->string('name')->default('')->change();
            $table->string('sex')->default('')->change();
            $table->string('img')->default('')->change();
            $table->string('birthplace')->default('')->change();
            $table->string('ethnic')->default('')->change();
            $table->string('unit')->default('')->change();
            $table->string('main_position')->default('')->change();
            $table->string('id_card')->default('')->change();
            $table->string('address')->default('')->change();
            $table->string('phone')->default('')->change();
            $table->string('email')->default('')->change();
            $table->string('introduction')->default('')->change();
            $table->string('company_intro')->default('')->change();
            $table->string('file1')->default('')->change();
            $table->string('file2')->default('')->change();
            $table->string('file3')->default('')->change();
            $table->string('file4')->default('')->change();
            $table->string('file5')->default('')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('signs', function (Blueprint $table) {
            
        });
    }
}
