<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     * 
     * 
     * 
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
                ],  
                [

                    'name'=>'font_test',
                    'primary_keyword'=>'Font test',
                    'secondary_keyword'=>null,
                    'brand_keyword'=>'stevethewebdev.co.uk',
                    'display_title'=>'Font test',
                    'meta_title_title'=>'Experienced Professional Web Developer',
                    'meta_description'=>'Helping small business improve their online presence. Gain customers, control your online content, and streamline your business processes',
                    'slug'=>'font-test',
                    'active'=>1
                ], 
                
                [

                    'name'=>'contact',
                    'primary_keyword'=>'Contact me',
                    'secondary_keyword'=>null,
                    'brand_keyword'=>'stevethewebdev.co.uk',
                    'display_title'=>'Contact Me',
                    'meta_title_title'=>'Contact Me',
                    'meta_description'=>'Contact me to find out how I can help your small business improve its online presence, gain customers,control your online content,and streamline your business processes',
                    'slug'=>'contact',
                    'active'=>1
                ],   
                [

                    'name'=>'services',
                    'primary_keyword'=>'Services',
                    'secondary_keyword'=>null,
                    'brand_keyword'=>'stevethewebdev.co.uk',
                    'display_title'=>'Services',
                    'meta_title_title'=>'Services',
                    'meta_description'=>'A range of services are available to help help your small business improve its online presence,gain customers,control your online content,and streamline your business processes',
                    'slug'=>'services',
                    'active'=>1
                ],   

              
            ]
                );
    }
}
