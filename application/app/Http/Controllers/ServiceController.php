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

    public function __construct(Request $request,Service $services)
    {
              
        $this->slug = $request->query('service');
        $this->service = $services->where('slug','=',$this->slug)->firstOrFail();
        $this->links = $this->fetchLinks($this->slug);
        
      
    }

    public function index() {

       $vw =   view('pages.service')->with(
                     
                'service',($this->service)
                // ['links',[($this->links)->toArray()]
                               
        )->with('links',($this->links));

        
        
       return $vw;
    }

    private function fetchLinks($service){

        if ($service == 'templates') {

              $links = Trade::all();   

        }

        else {

            $links == null;
        }

        return $links;

    }



}
