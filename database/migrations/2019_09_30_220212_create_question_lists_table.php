<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('accuracy_total');
            $table->bigInteger('accuracy_err');
            $table->decimal('accuracy_err_rate', 8, 6);
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
        Schema::dropIfExists('question_lists');
    }
}
