<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          
        Schema::create('view_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20); 
            $table->string('description')->nullable();
            $table->boolean('active')->default(false);    
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
        Schema::dropIfExists('view_type');
    }
}
