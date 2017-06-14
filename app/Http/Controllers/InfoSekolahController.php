<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$school = \App\School::all();
        return view('infosekolah')->with('school', $school);
    }
}
