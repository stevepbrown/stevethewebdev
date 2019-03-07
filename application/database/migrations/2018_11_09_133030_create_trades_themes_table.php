<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradesThemesTable extends Migration
{
    /**
     * Run the migrations.
     *:roll
     * @return void
     */
    public function up()
    {
        Schema::create('trades_themes', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('theme_id')->foreign('theme_id')->references('id')->on('themes');
            $table->integer('trade_id')->foreign('trade_id')->references('id')->on('trades');
            $table->boolean('active');
            $table->timestamps();
            $table->unique(['theme_id', 'trade_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades_themes');
    }
}
