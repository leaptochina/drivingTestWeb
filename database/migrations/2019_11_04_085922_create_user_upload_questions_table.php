<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserUploadQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_upload_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->default(0);
            $table->string('title', 2000)->default("");
            $table->string('a', 2000)->default("");
            $table->string('b', 2000)->default("");
            $table->string('c', 2000)->default("");
            $table->string('d', 2000)->default("");
            $table->string('e', 2000)->default("");
            $table->string('img', 2000)->default("");
            $table->string('msg', 2000)->default("");
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
        Schema::dropIfExists('user_upload_questions');
    }
}
