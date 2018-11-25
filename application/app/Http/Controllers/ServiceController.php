<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class ServiceController extends Controller
{
    
    protected $page;
    protected $slug;

    public function __construct(Request $request,Page $pages)
    {
              
        $this->slug = $request->query('service');

        
        $this->page = $pages->where('slug','=',$this->slug)->firstOrFail();
        
    }

    public function index() {
           
        return view('pages.'.$this->page->slug)->with('title',$this->page->title);
     
    }



}
