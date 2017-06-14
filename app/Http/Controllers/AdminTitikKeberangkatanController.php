<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Custom class
use App\User;
use App\DeparturePoint;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminTitikKeberangkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departure = DeparturePoint::all();
        return View('admin.departure.index')->with('departure', $departure);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.departure.create');
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
            'nama_titik' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'address' => 'required'
        ]);

        $departure = new DeparturePoint;
        $departure->nama_titik = $request->nama_titik;
        $departure->latitude = $request->latitude;
        $departure->longitude = $request->longitude;
        $departure->address = $request->address;
        $departure->save();

        Session::flash('message', 'Berhasil menambah titik keberangkatan.');
        return redirect('admin/departure');
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
        $departure = DeparturePoint::find($id);
        return View('admin.departure.edit')->with('departure', $departure);
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
            'nama_titik' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'address' => 'required'
        ]);

        $departure = DeparturePoint::find($id);
        $departure->nama_titik = $request->nama_titik;
        $departure->latitude = $request->latitude;
        $departure->longitude = $request->longitude;
        $departure->address = $request->address;
        $departure->save();

        Session::flash('message', 'Berhasil mengedit titik keberangkatan.');
        return redirect('admin/departure');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departure = DeparturePoint::find($id);
        $departure->delete();

        Session::flash('message', 'Titik keberangkatan berhasil dihapus!');
        return redirect('admin/departure');
    }
}
