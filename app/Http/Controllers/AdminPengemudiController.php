<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Custom class
use App\User;
use App\Driver;
use App\Route;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminPengemudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver = Driver::all();
        return View('admin.driver.index')->with('driver', $driver);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route = Route::all();
        $routeArray = array();
        foreach ($route as $key) {
            $routeArray[$key->id] = $key->nama;
        }
        return View('admin.driver.create')->with('route', $routeArray);
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
            'nama_supir' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'no_kendaraan' => 'required',
            'route_id' => 'required'
        ]);

        $driver = new Driver;
        $driver->nama_supir = $request->nama_supir;
        $driver->telepon = $request->telepon;
        $driver->alamat = $request->alamat;
        $driver->no_kendaraan = $request->no_kendaraan;
        $driver->route_id = $request->route_id;
        $driver->save();

        Session::flash('message', 'Berhasil menambah pengemudi.');
        return redirect('admin/driver');
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
        $driver = Driver::find($id);
        $route = Route::all();
        $routeArray = array();
        foreach ($route as $key) {
            $routeArray[$key->id] = $key->nama;
        }
        return View('admin.driver.edit')->with('driver', $driver)->with('route', $routeArray);
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
            'nama_supir' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'no_kendaraan' => 'required',
            'route_id' => 'required'
        ]);

        $driver = Driver::find($id);
        $driver->nama_supir = $request->nama_supir;
        $driver->telepon = $request->telepon;
        $driver->alamat = $request->alamat;
        $driver->no_kendaraan = $request->no_kendaraan;
        $driver->route_id = $request->route_id;
        $driver->save();

        Session::flash('message', 'Berhasil menambah pengemudi.');
        return redirect('admin/driver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();

        Session::flash('message', 'Pengemudi berhasil dihapus!');
        return redirect('admin/driver');
    }
}
