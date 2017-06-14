@extends('layouts.visitor')

@section('content')
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Info
                    <strong>Trayek</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-12">
                <table style="margin: auto">
                    <tr>
                        <th>No</th>
                        <th>Nama Trayek</th>
                        <th>Ruas Jalan Yang Dilalui</th>
                        <th>Panjang Trayek</th>
                        <th>Titik Awal Trayek</th>
                        <th>Jumlah Armada</th>
                    </tr>
                    @foreach($route as $key)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $key->nama }}</td>
                      <td>{{ $key->address }}</td>
                      <td>{{ $key->panjang_trayek }}</td>
                      <td>{{ $key->titik_awal }}</td>
                      <td>{{ $key->driver->count() }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
@endsection
