<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoTrayekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$route = \App\Route::all();
        return view('infotrayek')->with('route', $route);
    }
}
