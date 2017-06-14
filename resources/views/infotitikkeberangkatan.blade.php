@extends('layouts.visitor')

@section('content')

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Info
                        <strong>Titik Keberangkatan</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-12">
                    <table style="margin: auto">
                        <tr>
                            <th>No</th>
                            <th>Nama Titik Keberangkatan</th>
                            <th>Alamat</th>
                        </tr>
                        @foreach($departure as $key)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $key->nama_titik }}</td>
                          <td>{{ $key->address }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
@endsection
