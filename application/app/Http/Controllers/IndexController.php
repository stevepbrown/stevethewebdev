<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Page;


class IndexController extends Controller
{
protected $page;

public function index(){    
   
    $page = Page::where('slug','index')->firstOrFail();

        
    return view('pages.index',['page'=>$page]);


}

}
