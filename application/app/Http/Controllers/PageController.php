<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;


class PageController extends Controller
{

    
    protected $page;
    protected $slug;
    
    /**
     * __construct
     *
     * @param Request $request
     * @param Page $pages
     */
    public function __construct(Request $request,Page $pages)
    {
                
        $this->slug=(($request->slug == null)? 'home': $request->slug);
        
        $this->page = $pages->where('slug','=',$this->slug)->firstOrFail();
        
    }
    
    
    public function index() {
       
        return view('pages.'.$this->page->slug)->with('title',$this->page->title);
     
    }
    

}
