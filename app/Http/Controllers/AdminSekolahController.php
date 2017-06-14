<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Custom class
use App\User;
use App\School;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = School::all();
        return View('admin.school.index')->with('school', $school);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.school.create');
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
            'nama_sekolah' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'address' => 'required',
            'telepon' => 'required'
        ]);

        $school = new School;
        $school->nama_sekolah = $request->nama_sekolah;
        $school->latitude = $request->latitude;
        $school->longitude = $request->longitude;
        $school->address = $request->address;
        $school->telepon = $request->telepon;
        $school->save();

        Session::flash('message', 'Berhasil menambah sekolah.');
        return redirect('admin/school');
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
        $school = School::find($id);
        return View('admin.school.edit')->with('school', $school);
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
            'nama_sekolah' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'address' => 'required',
            'telepon' => 'required'
        ]);

        $school = School::find($id);
        $school->nama_sekolah = $request->nama_sekolah;
        $school->latitude = $request->latitude;
        $school->longitude = $request->longitude;
        $school->address = $request->address;
        $school->telepon = $request->telepon;
        $school->save();

        Session::flash('message', 'Berhasil mengedit sekolah.');
        return redirect('admin/school');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::find($id);
        $school->delete();

        Session::flash('message', 'Sekolah berhasil dihapus!');
        return redirect('admin/school');
    }
}
