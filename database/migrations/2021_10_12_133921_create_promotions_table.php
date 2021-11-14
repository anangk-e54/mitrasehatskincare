<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('category')->nullable();
            $table->float('price')->nullable();
            $table->string('disc_price')->nullable();
            $table->string('shop_link')->nullable();
            $table->text('description')->nullable();
            $table->string('image1')->nullable();

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
        Schema::dropIfExists('promotions');
    }
}