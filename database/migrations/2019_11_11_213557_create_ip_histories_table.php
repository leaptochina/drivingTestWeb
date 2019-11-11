<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_ip')->default("0.0.0.0");
            $table->bigInteger('user_id')->default("0");
            $table->dateTime('last_login_time')->default("2019-1-1 12:00:00");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ip_histories');
    }
}
