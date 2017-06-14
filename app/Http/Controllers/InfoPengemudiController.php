<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoPengemudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$driver = \App\Driver::all();
        return view('infopengemudi')->with('driver', $driver);
    }
}
