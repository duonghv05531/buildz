<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('work_time');
            $table->string('hotline');
            $table->string('address');
            $table->string('email');
            $table->string('site_name');
            $table->string('year');
            $table->timestamps();
        });
    }

    // 'feature-title',
    //     'feature-icon',
    //     'feature-content',
    //     'about-title',
    //     'about-icon',
    //     'about-content',
    //     'video',
    //     'site-name',
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
