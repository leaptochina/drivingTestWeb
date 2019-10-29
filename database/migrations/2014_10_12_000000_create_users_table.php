<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('icon')->nullable();
            $table->string('phone')->nullable();
            $table->string('user_identity')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('has_ad')->default(1);
            $table->bigInteger('enable_prone')->default(0);
            $table->bigInteger('enable_private_question')->default(0);
            $table->bigInteger('coin')->default(0);
            $table->date('last_daily_sign_in')->default("20191029");
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
