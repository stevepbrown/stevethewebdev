<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(DomAttributesSeeder::class);
        $this->call(DomTagsSeeder::class);
            }
}
