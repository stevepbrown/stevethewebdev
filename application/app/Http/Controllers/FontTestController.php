<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Page;


class FontTestController extends Controller
{
protected $page;

public function index(){    
   

    
    $page = Page::where('slug','font-test')->firstOrFail();

            return view('pages.font-test',['page'=>$page]);


}

}
