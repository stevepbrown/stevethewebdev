<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pages')->insert(
            [
                [

                    'name'=>'home',
                    'primary_keyword'=>'Welcome',
                    'secondary_keyword'=>null,
                    'brand_keyword'=>'stevethewebdev.co.uk',
                    'display_title'=>'Welcome',
                    'meta_title_title'=>'Experienced Professional Web Developer',
                    'meta_description'=>'Helping small business improve their online presence. Gain customers,control your online content,and streamline your business processes',
                    'slug'=>'index',
                    'active'=>1
                ]   
            ]
                );
    }
}
