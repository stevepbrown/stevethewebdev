<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ViewTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('view_types')->insert( 

            [
                
                ['name'=>'trades',
                'description'=>null,
                'active'=>0,
                'created_at'=>Carbon::now()
                ],
                ['name'=>'services',
                'description'=>null,
                'active'=>1,
                'created_at'=>Carbon::now()
            ]
            
            ]
            );
    }
}
