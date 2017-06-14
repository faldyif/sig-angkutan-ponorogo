@extends('layouts.visitor')

@section('content')

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Info
                        <strong>Sekolah</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-12">
                    <table style="margin: auto">
                        <tr>
                            <th>No</th>
                            <th>Nama Sekolah</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                        </tr>
                        @foreach($school as $key)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $key->nama_sekolah }}</td>
                          <td>{{ $key->address }}</td>
                          <td>{{ $key->telepon }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
@endsection
