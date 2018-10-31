<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugTbCodeServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbCodeServices', function (Blueprint $table) {
            $table->string('slug',20)->nullable()->after('service_description');
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
            $table->dropColumn('slug');
        });
    }
}
