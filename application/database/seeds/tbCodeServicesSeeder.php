<?php

use Illuminate\Database\Seeder;

class tbCodeServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbCodeServices')->insert(
            [
                [
                'service_name' => 'Template & websites',
                'active' => 1
                ],

                [
                'service_name' => 'Mobile-first sites',
                'active' => 1
                ],
        
                [
                'service_name' => 'Bespoke Design & Build',
                'active' => 1
                ],
            
                [
                'service_name' => 'Booking forms',
                'active' => 0
                ],
            
                [
                'service_name' => 'Accelerated Mobile Pages (AMP)',
                'active' => 0
                ],
            
                [
                'service_name' => 'Accessible sites',
                'active' => 0
                ],
            
                [
                'service_name' => 'Social Media Integration',
                'active' => 1
                ],
            
                [
                'service_name' => 'Copy writing',
                'active' => 0
                ],
            
                [
                'service_name' => 'Content Managment Systems (CMS)',
                'active' => 0
                ],
            
                [
                'service_name' => 'E-commerce',
                'active' => 0
                ],
            
                [
                'service_name' => 'Photography',
                'active' => 0
                ],
            
                [
                'service_name' => 'Web Analytics',
                'active' => 0
                ],
            
                [
                'service_name' => 'Search engine optimisation (SEO)',
                'active' => 1
                ],
            
                
            ]
            );         
    }
}
