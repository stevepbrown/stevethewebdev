<?php

use Illuminate\Database\Seeder;

class ThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
  
        
        DB::table('themes')->insert(
            
            [
                [
                'title' => 'Start Bootstrap - Business Casual',
                'alias'=>'Business Casual',
                'description'=>'Business Casual is a multipurpose website theme, featuring a landing page, about page, blog page, and a contact page along with various custom styles and components.',
                'active' => 0,
                ],
                [
                'title' => 'Start Bootstrap - Agency',
                'alias'=>'Agency',
                'description'=>'Agency is a one page agency portfolio theme, featuring several content sections, a responsive portfolio grid with hover effects, full page portfolio item modals, a responsive timeline, and a working PHP contact form',
                'active' => 0,
                ],
                [
                'title' => 'Start Bootstrap - Freelancer',
                'alias'=>'Freelancer',
                'description'=>'Freelancer is a one page freelancer portfolio theme, featuring several content sections, a responsive portfolio grid with hover effects, full page portfolio item modals, and a working PHP contact form.',
                'active' => 0,
                ],
                [
                'title' => 'Start Bootstrap - Grayscale',
                'alias'=>'Grayscale',
                'description'=>'Grayscale is a multipurpose, one page HTML theme',
                'active' => 0,
                ],
                [
                'title' =>'Start Bootstrap - Creative' ,
                'alias'=>'Creative',
                'description'=>'Creative is a one page creative theme',
                'active' => 0,
                ],
                [
                'title' =>'Start Bootstrap - Resume' ,
                'alias'=>'Resume',
                'description'=>'CV theme featuring a fixed sidebar with content sections to build a simple, yet elegant CV.',
                'active' => 0,
                ],
                [
                'title' => 'Start Bootstrap - Stylish Portfolio',
                'alias'=>'Portfolio',
                'description'=>'A responsive, one page portfolio theme, featuring multiple content sections with an off canvas navigation menu.',
                'active' => 0,
                ],
                [
                'title' => 'Start Bootstrap - Landing Page',
                'alias'=>'Landing Page',
                'description'=>'Landing Page is a multipurpose landing page template',
                'active' => 0,
                ],
               
            ]);
    }
}
