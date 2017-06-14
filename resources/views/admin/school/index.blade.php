@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Sekolah
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Sekolah</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-2 pull-right">
                	<a href="{{ url('admin/school/create') }}" class="btn btn-block btn-primary">Tambah Sekolah</a>
                </div>
              </div>
              <br>
              <table id="tabel" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Titik Sekolah</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Alamat</th>
                  <th>No Telp</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($school as $key)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $key->nama_sekolah }}</td>
                  <td>{{ $key->latitude }}</td>
                  <td>{{ $key->longitude }}</td>
                  <td>{{ $key->address }}</td>
                  <td>{{ $key->telepon }}</td>
                  <td><a href="{{ url('admin/school') }}/{{ $key->id }}/edit" class="btn btn-info">Edit</a><br>
                  	{{ Form::open(['method' => 'DELETE', 'route' => ['school.destroy', $key->id]]) }}
          				    	{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
          					{{ Form::close() }}
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Titik Sekolah</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Alamat</th>
                  <th>No Telp</th>
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