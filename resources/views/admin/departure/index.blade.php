@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Titik Keberangkatan
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Titik Keberangkatan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Titik Keberangkatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-2 pull-right">
                	<a href="{{ url('admin/departure/create') }}" class="btn btn-block btn-primary">Tambah Titik</a>
                </div>
              </div>
              <br>
              <table id="tabel" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Titik Keberangkatan</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($departure as $key)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $key->nama_titik }}</td>
                  <td>{{ $key->latitude }}</td>
                  <td>{{ $key->longitude }}</td>
                  <td>{{ $key->address }}</td>
                  <td><a href="{{ url('admin/departure') }}/{{ $key->id }}/edit" class="btn btn-info">Edit</a><br>
                  	{{ Form::open(['method' => 'DELETE', 'route' => ['departure.destroy', $key->id]]) }}
          				    	{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
          					{{ Form::close() }}
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Titik Keberangkatan</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Alamat</th>
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