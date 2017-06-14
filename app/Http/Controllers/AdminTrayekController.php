<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Custom class
use App\User;
use App\Route;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminTrayekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route = Route::all();
        return View('admin.route.index')->with('route', $route);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.route.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'address' => 'required',
            'panjang_trayek' => 'required',
            'titik_awal' => 'required',
            'color' => 'required',
            'kml' => 'required|file'
        ]);

        $route = new Route;
        $route->nama = $request->nama;
        $route->address = $request->address;
        $route->panjang_trayek = $request->panjang_trayek;
        $route->color = $request->color;
        $route->titik_awal = $request->titik_awal;
        if($request->hasFile('kml') && $request->file('kml')->isValid()) {
           $destinationPath = 'public/kml/trayek';
           $extension = 'kml';
           $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
           $request->kml->storeAs($destinationPath, $fileName);
           $route->path_kml = $fileName;
        }
        $route->save();

        Session::flash('message', 'Berhasil mengupload trayek.');
        return redirect('admin/route');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $route = Route::find($id);
        return View('admin.route.edit')->with('route', $route);
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
        $this->validate($request, [
            'nama' => 'required',
            'address' => 'required',
            'panjang_trayek' => 'required',
            'color' => 'required',
            'titik_awal' => 'required'
        ]);

        $route = Route::find($id);
        $route->nama = $request->nama;
        $route->address = $request->address;
        $route->panjang_trayek = $request->panjang_trayek;
        $route->color = $request->color;
        $route->titik_awal = $request->titik_awal;
        if($request->hasFile('kml') && $request->file('kml')->isValid()) {
           $destinationPath = 'public/kml/trayek';
           $extension = 'kml';
           $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
           $request->kml->storeAs($destinationPath, $fileName);
           $route->path_kml = $fileName;
        }
        $route->save();

        Session::flash('message', 'Berhasil mengedit trayek.');
        return redirect('admin/route');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = Route::find($id);
        $route->delete();

        Session::flash('message', 'Trayek berhasil dihapus!');
        return redirect('admin/route');
    }
}
