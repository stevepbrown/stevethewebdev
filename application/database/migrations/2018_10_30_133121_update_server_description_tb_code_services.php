<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateServerDescriptionTbCodeServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbCodeServices', function (Blueprint $table) {
            $table->string('service_description',500)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbCodeServices', function (Blueprint $table) {
         
            $table->string('service_description',500)->nullable(false)->change();
        
        });
    }
}
