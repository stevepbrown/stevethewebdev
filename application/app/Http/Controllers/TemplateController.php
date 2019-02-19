<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Facade;
use App\Trade;

class TemplateController extends Controller
{

    protected $trade;
    protected $slug;
    protected $themes;
    

    public function __construct(Request $request,Trade $trades)
    {
               

        $this->slug = $request->query('trade');

    
        $this->trade = $trades->where('slug','=',$this->slug)->FirstOrFail();
      

       
    }

    public function index() {
       
       $trade = $this->trade; 

       
       //$themes = $trade->themes->toArray();

 
        
        return  view('pages.templates.template_sbs_landing_page')
        // Keep this, it is needed in the head
        ->with('title',$this->trade->name)
        ->with('tradeName',$this->trade->slug);
 
              
           
    }

    //   protected $templates;
    //   protected $trades;  
      
      

}
