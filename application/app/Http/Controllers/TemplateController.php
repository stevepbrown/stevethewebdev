<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trade;

class TemplateController extends Controller
{

    protected $trade;
    protected $slug;
    

    public function __construct(Request $request,Trade $trades)
    {
               

        $this->slug = $request->query('trade');

    
        $this->trade = $trades->where('slug','=',$this->slug)->FirstOrFail()->with('Themes');
      

       
    }

    public function index() {
        
        

        return  view('pages.templates.template_sbs_landing_page')->with('trade',$this->trade->toArray())
        // Keep this, it is needed in the head
        ->with('title',$this->trade->name)
        ->with('tradeName',$this->trade->slug);
 
              
           
    }
}
