@extends('layouts.visitor')

@section('content')
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Info
                    <strong>Pengemudi</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-12">
                <table style="margin: auto">
                    <tr>
                        <th>No</th>
                        <th>Nama Supir</th>
                        <th>Trayek</th>
                        <th>Titik Awal</th>
                        <th>No HP Supir</th>
                        <th>Alamat Rumah Supir</th>
                        <th>No Kendaraan</th>
                    </tr>
                    @foreach($driver as $key)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $key->nama_supir }}</td>
                      <td>{{ \App\Route::find($key->route_id)->nama }}</td>
                      <td>{{ \App\Route::find($key->route_id)->titik_awal }}</td>
                      <td>{{ $key->telepon }}</td>
                      <td>{{ $key->alamat }}</td>
                      <td>{{ $key->no_kendaraan }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
@endsection
