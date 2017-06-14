@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Trayek
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit Trayek</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Form Edit Trayek</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          {!! Form::model($route, array('route' => array('route.update', $route->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal')) !!}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Trayek</label>

                <div class="col-sm-10">
                  {{ Form::text('nama', null, array('class' => 'form-control')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Rute Yang Dilalui</label>

                <div class="col-sm-10">
                  {{ Form::textarea('address', null, array('class' => 'form-control')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Panjang Trayek</label>

                <div class="col-sm-10">
                  {{ Form::text('panjang_trayek', null, array('class' => 'form-control')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Titik Awal</label>

                <div class="col-sm-10">
                  {{ Form::text('titik_awal', null, array('class' => 'form-control')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Warna</label>

                <div class="col-sm-10">
                  {{ Form::text('color', null, array('class' => 'form-control')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">File KML<br>(kosongkan jika tidak ingin diubah)</label>

                <div class="col-sm-10">
                  {{ Form::file('kml', array('class' => 'form-control')) }}
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
          {!! Form::close() !!}
        </div>
      </div>
      <!-- /.col -->
    </div>
    
  </section>
  <!-- /.content -->
@endsection