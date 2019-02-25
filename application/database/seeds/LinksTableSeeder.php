<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
       
            // templates
            // social
            // seo
            // photography
            // mobile
            // ecommerce
            // copy
            // cms
            // bookings
            // bespoke
            // analytics
            // AMP
            // accessible


            ['type'=>,
            'name'=>,
            'label'=>,
            'url'=>,
            'tooltip'=>,
            'description'=>,
            'active'=>],

       
        ]);
    }
}
