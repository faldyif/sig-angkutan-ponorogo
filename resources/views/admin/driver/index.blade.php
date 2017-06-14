@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Pengemudi
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Pengemudi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengemudi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-2 pull-right">
                	<a href="{{ url('admin/driver/create') }}" class="btn btn-block btn-primary">Tambah Pengemudi</a>
                </div>
              </div>
              <br>
              <table id="tabel" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Supir</th>
                  <th>Trayek</th>
                  <th>Titik Awal</th>
                  <th>No HP Supir</th>
                  <th>Alamat Rumah Supir</th>
                  <th>No Kendaraan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($driver as $key)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $key->nama_supir }}</td>
                  <td>{{ \App\Route::find($key->route_id)->nama }}</td>
                  <td>{{ \App\Route::find($key->route_id)->titik_awal }}</td>
                  <td>{{ $key->telepon }}</td>
                  <td>{{ $key->alamat }}</td>
                  <td>{{ $key->no_kendaraan }}</td>
                  <td><a href="{{ url('admin/driver') }}/{{ $key->id }}/edit" class="btn btn-info">Edit</a><br>
                    {{ Form::open(['method' => 'DELETE', 'route' => ['driver.destroy', $key->id]]) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Supir</th>
                  <th>Trayek</th>
                  <th>Titik Awal</th>
                  <th>No HP Supir</th>
                  <th>Alamat Rumah Supir</th>
                  <th>No Kendaraan</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    
  </section>
  <!-- /.content -->

@endsection