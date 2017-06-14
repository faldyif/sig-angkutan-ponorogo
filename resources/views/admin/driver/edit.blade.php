@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Pengemudi
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit Pengemudi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Form Edit Pengemudi</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          {!! Form::model($driver, array('route' => array('driver.update', $driver->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal')) !!}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Pengemudi</label>

                <div class="col-sm-10">
                  {{ Form::text('nama_supir', null, array('class' => 'form-control')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">No Telepon</label>

                <div class="col-sm-10">
                  {{ Form::text('telepon', null, array('class' => 'form-control')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">No Kendaraan</label>

                <div class="col-sm-10">
                  {{ Form::text('no_kendaraan', null, array('class' => 'form-control')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alamat</label>

                <div class="col-sm-10">
                  {{ Form::textarea('alamat', null, array('class' => 'form-control')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Trayek</label>

                <div class="col-sm-10">
                  {{ Form::select('route_id', $route, null, ['placeholder' => 'Pilih trayek...', 'class' => 'form-control']) }}
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