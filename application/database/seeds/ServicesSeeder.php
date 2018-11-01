<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
                [
                'name' => 'Templated websites',
                'active' => 1
                ],

                [
                'name' => 'Mobile-first sites',
                'active' => 1
                ],
        
                [
                'name' => 'Bespoke Design & Build',
                'active' => 1
                ],
            
                [
                'name' => 'Booking forms',
                'active' => 0
                ],
            
                [
                'name' => 'Accelerated Mobile Pages (AMP)',
                'active' => 0
                ],
            
                [
                'name' => 'Accessible sites',
                'active' => 0
                ],
            
                [
                'name' => 'Social Media Integration',
                'active' => 1
                ],
            
                [
                'name' => 'Copy writing',
                'active' => 0
                ],
            
                [
                'name' => 'Content Managment Systems (CMS)',
                'active' => 0
                ],
            
                [
                'name' => 'E-commerce',
                'active' => 0
                ],
            
                [
                'name' => 'Photography',
                'active' => 0
                ],
            
                [
                'name' => 'Web Analytics',
                'active' => 0
                ],
            
                [
                'name' => 'Search engine optimisation (SEO)',
                'active' => 1
                ],
            
                
            ]
            );         
    }
}
