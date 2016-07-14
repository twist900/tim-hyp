<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_service', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('device_id')->unsigned()->index();
            $table->foreign('device_id')->references('id')->on('devices');
            $table->integer('service_id')->unsigned()->index();
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::drop('device_service');
    }
}
