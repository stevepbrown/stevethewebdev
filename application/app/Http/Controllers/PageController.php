<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;


class PageController extends Controller
{

    /**
     * A collection of active online services 
     *
     */
    protected $services;
    
    
    public function __construct(Services $services)
    {
                
        $this->services = $services->where('active','=',1)->get();
    }
    
    
    public function index() {

        return view('pages.home')->with('title','Welcome');

    }
}
