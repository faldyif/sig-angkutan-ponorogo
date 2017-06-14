<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route = \App\Route::all();
        $school = \App\School::all();
        $departure = \App\DeparturePoint::all();
        return view('welcome')->with('route', $route)->with('school', $school)->with('departure', $departure);
    }
}
