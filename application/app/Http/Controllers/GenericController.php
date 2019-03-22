<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class GenericController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort('405',"No no no ... I'm afraid you are not authorized to perform that action!");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort('405',"No no no ... I'm afraid you are not authorized to perform that action!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort('405',"No no no ... I'm afraid you are not authorized to perform that action!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        if (($request->path) === '/') {
            $slug = 'index';

        }
        else{

            $slug = $request->path();


        }

        
        $page = Page::where('slug',$slug)->firstOrFail();

        return view('pages.'.$slug,['page'=>$page]);

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     abort('405',"No no no ... I'm afraid you are not authorized to perform that action!");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     abort('405',"No no no ... I'm afraid you are not authorized to perform that action!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     abort('405',"No no no ... I'm afraid you are not authorized to perform that action!");
    }
}
