@extends('app.layouts')
@section('content header','Data Kursus')
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Form Add Data Kursus</h3>
          <a href="{{route('indexDatakursus')}}" class="btn btn-app pull-right">
            <i class="fa fa-table"></i> Data
          </a>
          <div class="box-body">
          <div class="row">
            <div class="row">
              <div class="col-md-12">
              {!! Form::open(['route' => 'saveCoursedata', 'method' => 'POST']) !!}
               <div class="form-group @if($errors->has('namaKursus')) has-error @endif">
                {{Form::label('Data kursus')}}
                {{Form::text('namaKursus',null,['class'=>'form-control','placeholder'=>'Masukan Data kursus','required'])}}
                @if($errors->has('namaKursus'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> Masukan Data kursus</span>
                @endif
              </div>
            </div>
           
          </div>
          <div class="box-footer">
            <a href="{{route('indexDatakursus')}}" type="button" class="btn btn-primary pull-left" style="margin-right: 5px;">
              <i class="fa fa-reply"></i> Kembali
            </a>
            {{ Form::submit('Simpan',['class'=>'btn btn-success pull-right']) }}
          </div>
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>
</div>
@endsection
