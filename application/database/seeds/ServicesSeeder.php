<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
                'slug' =>'templates',
                'icon' => 'fa-columns',
                'created_at'=>Carbon::now()
                    
            ],

                [
                'name' => 'Mobile-first sites',
                'active' => 1,
                'slug' =>'mobile',
                'icon' => 'fa-mobile', 
                'created_at'=>Carbon::now()
                   
            ],
        
                [
                'name' => 'Bespoke Design & Build',
                'active' => 1,
                'slug' =>'bespoke',
                'icon' => 'fa-cubes',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Booking forms',
                'active' => 0,
                'slug' =>'bookings',
                'icon'=>null,
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Accelerated Mobile Pages (AMP)',
                'active' => 0,
                'slug' =>'AMP',
                'icon' => 'img/AMP-Brand-Black-Icon.svg',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Accessible sites',
                'active' => 0,
                'slug' =>'accessible',
                'icon' => 'fa-universal-access',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Social Media Integration',
                'active' => 1,
                'slug' =>'social',
                'icon' => null,
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Copy writing',
                'active' => 0,
                'slug' =>'copy',
                'icon' => 'fa-pencil',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Content Managment Systems (CMS)',
                'active' => 0,
                'slug' =>'cms',
                'icon' => null,
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'E-commerce',
                'active' => 0,
                'slug' =>'ecommerce',
                'icon' => null,
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Photography',
                'active' => 0,
                'slug' =>'photography',
                'icon' => null,
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Web Analytics',
                'active' => 0,
                'slug' =>'analytics',
                'icon' => null,
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Search engine optimisation (SEO)',
                'active' => 1,
                'slug' =>'seo',
                'icon' => null,
                'created_at'=>Carbon::now()
                ],
            
                
            ]
            );         
    }
}
