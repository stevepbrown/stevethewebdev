<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Trade;

class ServiceController extends Controller
{
    
    protected $service;
    protected $slug;
    protected $links;
    protected $title;

    public function __construct(Request $request,Service $services)
    {
              
        $this->slug = $request->query('service');
        $this->service = $services->where('slug','=',$this->slug)->firstOrFail();
        $this->links = $this->fetchLinks($this->slug);
        
      
    }

    public function index() {

       return view('pages.service')
       
       ->with('service',($this->service))
                                               
    ->with('title',($this->service->name))
    
    ->with('links',($this->links));

       
    }

    private function fetchLinks($service){

        if ($service == 'templates') {

              $this->links = Trade::all();   

        }

        else {

            $this->links = null;
        }

        return $this->links;

    }



}
