<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;


class IndexController extends Controller
{


    public function __invoke(){
       
        
        return view('pages.index',[
            'page_title'=>'Welcome'
            ]);

              
      
        
    }
}
