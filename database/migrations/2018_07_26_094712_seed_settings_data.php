<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedSettingsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $settings = [
            'phone' => '150 0026 7065（王老师）',
            'address' => '中国上海市华山路1954号 上海交通大学（徐汇校区）新建楼',
            'email' => 'silkroaduni@163.com',
            'copyright' => 'copyright © silkroad university All Rights Reserved.',
            'phone_2' => '150 0026 7065',
        ];

        DB::table('settings')->insert($settings);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('settings')->truncate();
    }
}
