@extends('app.layouts')
@section('content')

  <section class="content-header">
      <h1>
        Data Kursus
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Form Add Data Kursus</h3>
          <a href="" class="btn btn-app pull-right">
            <i class="fa fa-table"></i> Data
          </a>
          <div class="box-body">
          <div class="row">
            <div class="row">
              <div class="col-md-12">
               <div class="form-group @if($errors->has('Datakursus')) has-error @endif">
                {{Form::label('Data kursus')}}
                {{Form::text('Datakursus',null,['class'=>'form-control','placeholder'=>'Masukan Data kursus','required'])}}
                @if($errors->has('Datakursus'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> Masukan Data kursus</span>
                @endif
              </div>
            </div>
           
          </div>
          <div class="box-footer">
            <a href="addform" type="button" class="btn btn-primary pull-left" style="margin-right: 5px;">
              <i class="fa fa-reply"></i> Kembali
            </a>
            {{ Form::submit('Simpan',['class'=>'btn btn-success pull-right']) }}
          </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
