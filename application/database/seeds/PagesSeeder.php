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
                'title' => 'Home',
                'slug' => 'home'
                 ],
                              
                
                ['title' => 'Services',
                'slug' => 'services'
                 ],
                              
                [
                'title' => 'Contact',
                'slug' => 'contact'
                 ],
                              
                [
                'title' => 'Templates',
                'slug' => 'templates'
                 ],
                              
                [
                'title' => 'Trades',
                'slug' => 'trades'
                ]
              
            ]
                );                
               
    }
}
