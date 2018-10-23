<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
  public function index(){

      return view('pages.cookies')->with('title','Cookies');

  }
  public function store(){


    /* TODO - Need to return a domain cookie with maximum expiry by law  */

      return view('pages.home')->with('title', 'Welcome');

  }




}
