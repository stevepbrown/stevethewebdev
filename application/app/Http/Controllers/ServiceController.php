<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    
    protected $service;
    protected $slug;

    public function __construct(Request $request,Service $services)
    {
              
        $this->slug = $request->query('service');
        $this->service = $services->where('slug','=',$this->slug)->firstOrFail();
        
    }

    public function index() {
           
       
        return view('pages.service')->with('service',($this->service));
     
    }



}
