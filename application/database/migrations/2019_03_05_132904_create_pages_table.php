<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->comment('Name in the database'); 
            $table->string('primary_keyword')->comment('used to construct the page_title consult https://moz.com/learn/seo/title-tag');
            $table->string('secondary_keyword')->nullable()->comment('used to construct the page_title https://moz.com/learn/seo/title-tag');
            $table->string('brand_keyword')->comment('used to construct the page_title, forming the part after the pipe https://moz.com/learn/seo/title-tag');
            
            $table->string('display_title',50)->comment('Displayed title in the body');   
            
            // This is a computed column on the MODEL, via an accessor    
            // $table->string('page_title', 60)->comment('as displayed on tab AND head title');
            
            $table->string('meta_title', 150)->comment('as displayed on the title ATTRIBUTE of the [head] title');
            $table->string('meta_description', 160)->comment('meta_description in [head]');
            $table->string('slug',20)->unique;
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
        Schema::dropIfExists('pages');
    }
}
