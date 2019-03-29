<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Trade;
use App\Page;

class ServiceController extends Controller
{
    
    protected $service;
    protected $slug;
    protected $links;
    // protected $title;

    public function __construct(Request $request,Service $services)
    {
              
        $this->slug = $request->query('service');
        $this->service = $services->where('slug','=',$this->slug)->firstOrFail();
        $this->links = $this->fetchLinks($this->slug);
        $this->page = $page = Page::where('slug','services')->firstOrFail();
        
      
    }


    public function index(){

        // return view('pages.contact')->with('page_title','Contact');
        

        return view('pages.service',['page'=>$this->page,'service'=>$this->service]);

    }

  

    protected function fetchLinks($service){

        if ($service == 'templates') {

              $this->links = Trade::all();   

        }

        else {

            $this->links = null;
        }

        return $this->links;

    }



}
