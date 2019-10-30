<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->default(0);
            $table->string('order_id')->default("");
            $table->string('money_out')->default("");
            $table->bigInteger('coin_gain')->default(0);
            $table->string('signature', 2000)->default("");
            $table->string('sku')->default("");  
            $table->string('purchase_token')->default("");
            $table->string('originalJson', 5000)->default(""); 
            $table->bigInteger('purchaseTime')->default(0);
            $table->string('ip')->default("0.0.0.0");
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
        Schema::dropIfExists('purchases');
    }
}
