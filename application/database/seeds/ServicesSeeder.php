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
                'created_at'=>Carbon::now()
                ],

                [
                'name' => 'Mobile-first sites',
                'active' => 1,
                'slug' =>'mobile',
                'created_at'=>Carbon::now()
                ],
        
                [
                'name' => 'Bespoke Design & Build',
                'active' => 1,
                'slug' =>'bespoke',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Booking forms',
                'active' => 0,
                'slug' =>'bookings',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Accelerated Mobile Pages (AMP)',
                'active' => 0,
                'slug' =>'AMP',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Accessible sites',
                'active' => 0,
                'slug' =>'accessible',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Social Media Integration',
                'active' => 1,
                'slug' =>'social',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Copy writing',
                'active' => 0,
                'slug' =>'copy',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Content Managment Systems (CMS)',
                'active' => 0,
                'slug' =>'cms',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'E-commerce',
                'active' => 0,
                'slug' =>'ecommerce',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Photography',
                'active' => 0,
                'slug' =>'photography',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Web Analytics',
                'active' => 0,
                'slug' =>'analytics',
                'created_at'=>Carbon::now()
                ],
            
                [
                'name' => 'Search engine optimisation (SEO)',
                'active' => 1,
                'slug' =>'seo',
                'created_at'=>Carbon::now()
                ],
            
                
            ]
            );         
    }
}
