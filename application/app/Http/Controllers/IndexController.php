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
// protected $services;

/**
 * Icons 
 *
 * @var collection
 */
// protected $icons;



    public function __invoke(){
    return view('pages.index',['services' => Service::all(),'page_title'=>'Welcome','icon'=>'blah']);
}
}
