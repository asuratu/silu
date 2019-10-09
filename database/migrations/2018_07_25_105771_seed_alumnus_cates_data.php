<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedAlumnusCatesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $alumnus_cates = [
            [
                'name' => '校友风采'
            ],
            [
                'name' => '校友活动'
            ],
            [
                'name' => '校友生活'
            ],
            [
                'name' => '丝路视野'
            ],
        ];

        DB::table('alumnus_cates')->insert($alumnus_cates);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('alumnus_cates')->truncate();
    }
}
