<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoTitikKeberangkatan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$departure = \App\DeparturePoint::all();
        return view('infotitikkeberangkatan')->with('departure', $departure);
    }
}
