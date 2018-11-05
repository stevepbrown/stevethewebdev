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
                'active' => 1,
                'slug' =>'templates'
                ],

                [
                'name' => 'Mobile-first sites',
                'active' => 1,
                'slug' =>'mobile'
                ],
        
                [
                'name' => 'Bespoke Design & Build',
                'active' => 1,
                'slug' =>'bespoke'
                ],
            
                [
                'name' => 'Booking forms',
                'active' => 0,
                'slug' =>'bookings'
                ],
            
                [
                'name' => 'Accelerated Mobile Pages (AMP)',
                'active' => 0,
                'slug' =>'AMP'
                ],
            
                [
                'name' => 'Accessible sites',
                'active' => 0,
                'slug' =>'accessible'
                ],
            
                [
                'name' => 'Social Media Integration',
                'active' => 1,
                'slug' =>'social'
                ],
            
                [
                'name' => 'Copy writing',
                'active' => 0,
                'slug' =>'copy'
                ],
            
                [
                'name' => 'Content Managment Systems (CMS)',
                'active' => 0,
                'slug' =>'cms'
                ],
            
                [
                'name' => 'E-commerce',
                'active' => 0,
                'slug' =>'ecommerce'
                ],
            
                [
                'name' => 'Photography',
                'active' => 0,
                'slug' =>'photography'
                ],
            
                [
                'name' => 'Web Analytics',
                'active' => 0,
                'slug' =>'analytics'
                ],
            
                [
                'name' => 'Search engine optimisation (SEO)',
                'active' => 1,
                'slug' =>'seo'
                ],
            
                
            ]
            );         
    }
}
