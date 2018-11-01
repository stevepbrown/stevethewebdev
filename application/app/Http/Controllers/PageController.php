<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;


class PageController extends Controller
{

    /**
     * A collection of active online Service 
     *
     */
    protected $Service;
    
    
    public function __construct(Service $Service)
    {
                
        $this->Service = $Service->where('active','=',1)->get();
    }
    
    
    public function index() {

        return view('pages.home')->with('title','Welcome');

    }
}
