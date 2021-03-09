<?php

namespace App\Http\Controllers;

use Core\Illuminate\Request\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('index',$request->all());
    }

    public function show(Request $request)
    {


       return view('backend.index',[
           'name' => 'AAA',
       ]);
    }

}