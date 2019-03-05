<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;


class IndexController extends Controller
{

    

    public function index(request $request){

              return view('pages.index');

    }




}
