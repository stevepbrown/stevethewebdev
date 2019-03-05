<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Page;


class IndexController extends Controller
{

    $page = Page->where('slug',)

    public function index(request $request){

              return view('pages.index');

    }




}
