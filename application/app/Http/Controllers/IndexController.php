<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class IndexController extends Controller
{

/**
 * Services collection
 *
 * @var collection
 */
protected $services;

/**
 * Icons 
 *
 * @var collection
 */
protected $icons;

public function __construct($services){

    $this->services= Service::all();
    $this->icons = $this->getIcons();
    
}

    
     public function __invoke()
    {
        return view('pages.index')->with[

            ['title' => 'Welcome'],
            ['icons'=> '$this->icons'];

        ];
    }

    private function getIcons(){

        $icons = $this->services>mapWithKeys(function ($service) {
            return [
                $service['id'] => $service['id'],
                $service['icon']=>$service['icon']
            ];
        });


    }



}
