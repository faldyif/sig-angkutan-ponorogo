@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Trayek
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Trayek</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Trayek</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-2 pull-right">
                	<a href="{{ url('admin/route/create') }}" class="btn btn-block btn-primary">Tambah Trayek</a>
                </div>
              </div>
              <br>
              <table id="tabel" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Trayek</th>
                  <th>Jalan yang Dilalui</th>
                  <th>Panjang Trayek (km)</th>
                  <th>Titik Awal Trayek</th>
                  <th>Jumlah Armada</th>
                  <th>Kode Warna</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($route as $key)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $key->nama }}</td>
                  <td>{{ $key->address }}</td>
                  <td>{{ $key->panjang_trayek }}</td>
                  <td>{{ $key->titik_awal }}</td>
                  <td>{{ $key->driver->count() }}</td>
                  <td style="font-color: {{ $key->color }}">{{ $key->color }}</td>
                  <td><a href="{{ url('admin/route') }}/{{ $key->id }}/edit" class="btn btn-info">Edit</a><br>
                  	{{ Form::open(['method' => 'DELETE', 'route' => ['route.destroy', $key->id]]) }}
          				    	{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
          					{{ Form::close() }}
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Trayek</th>
                  <th>Jalan yang Dilalui</th>
                  <th>Panjang Trayek (km)</th>
                  <th>Titik Awal Trayek</th>
                  <th>Jumlah Armada</th>
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