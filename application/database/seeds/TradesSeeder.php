<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trades')->insert(
        [
            [
                'name' => 'Accountant',
                'slug' => 'accounts',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Beauty Salon',
                'slug' => 'beauty',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Builder',
                'slug' => 'building',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Courier',
                'slug' => 'courier',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Dentist',
                'slug' => 'dentist',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Dog walker',
                'slug' => 'walker',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Estate Agent',
                'slug' => 'estate',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Gardener',
                'slug' => 'gardening',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Hairdresser',
                'slug' => 'hairdresser',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Mechanic',
                'slug' => 'mechanic',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Pet Groomer',
                'slug' => 'grooming',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Taxi',
                'slug' => 'taxi',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Travel Agent',
                'slug' => 'travel',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Veterinarian',
                'slug' => 'vet',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Print services',
                'slug' => 'printing',
                'active'=>'0'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Cafe / Restaurant',
                'slug' => 'cafe',
                'active'=>'1'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Electrician',
                'slug' => 'electrician',
                'active'=>'1'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Heating Engineer',
                'slug' => 'heating',
                'active'=>'1'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Painter & decorator',
                'slug' => 'decorator',
                'active'=>'1'
                ,'created_at'=>Carbon::now()],
                
                [
                'name' => 'Plumber',
                'slug' => 'plumbing',
                'active'=>'1'
                ,'created_at'=>Carbon::now()
                ]
        ]     
            
        );
    }
}
