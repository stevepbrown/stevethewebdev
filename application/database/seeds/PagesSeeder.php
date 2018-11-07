<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
                'title' => 'Home',
                'slug' => 'home',
                'created_at'=>Carbon::now()
                 ],
                              
                
                ['title' => 'Services',
                'slug' => 'services',
                 'created_at'=>Carbon::now()],
                              
                [
                'title' => 'Contact',
                'slug' => 'contact',
                 'created_at'=>Carbon::now()
                ],
                              
                [
                'title' => 'Templates',
                'slug' => 'templates',
                 'created_at'=>Carbon::now()],
                              
                [
                'title' => 'Trades',
                'slug' => 'trades',
                'created_at'=>Carbon::now()]
              
            ]
                );                
               
    }
}
