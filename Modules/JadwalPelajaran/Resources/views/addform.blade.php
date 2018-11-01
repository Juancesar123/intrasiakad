@extends('app.layouts')
@section('content header','Data Jadwal')
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Jadwal Kursus</h3>
          <a href="{{route('indexJadwalPelajaran')}}" class="btn btn-app pull-right">
            <i class="fa fa-table"></i> Data
          </a>
          {{ Form::open(['route'=>'saveCoursedata','method'=>'POST']) }}
        <div class="box-body">
          <div class="row">
            <div class="col-md-12" >
              <div class="form-group @if($errors->has('no')) has-error @endif">
                {{Form::label('No')}}
                {{ Form::number('no',null,['class'=>'form-control','placeholder'=>'Masukan No','required']) }}
                @if($errors->has('no'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> Masukan Nomor</span>
                @endif
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group @if($errors->has('hari')) has-error @endif">
                {{Form::label('Hari')}}
                {{ Form::text('hari',null,['class'=>'form-control','placeholder'=>'Masukan Hari','required']) }}
                @if($errors->has('hari'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> Masukan Hari</span>
                @endif
              </div>
            </div>
          <div class="col-md-12">
            <div class="form-group @if($errors->has('jam_mulai')) has-error @endif">
              {{Form::label('Jam Mulai')}}
              {{ Form::text('jam_mulai',null,['class'=>'form-control','placeholder'=>'Masukan Jam Mulai','required']) }}
              @if($errors->has('jam_mulai'))
              <span class="help-block"><i class="fa fa-times-circle-o"></i> Masukan Jam Mulai</span>
              @endif
            </div>
          </div>
            <div class="col-md-12">
              <div class="form-group @if($errors->has('jam_selesai')) has-error @endif">
                {{Form::label('Jam Selesai')}}
                {{ Form::text('jam_selesai',null,['class'=>'form-control','placeholder'=>'Masukan Jam Selesai','required']) }}
                @if($errors->has('jam_selesai'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> Masukan Jam Selesai</span>
                @endif
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group @if($errors->has('id_kursus')) has-error @endif">
                {{Form::label('Id Kursus')}}
                {{ Form::number('id_kursus',null,['class'=>'form-control','placeholder'=>'Masukan Id Kursus','required']) }}
                @if($errors->has('id_kursus'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> Masukan Id Kursus</span>
                @endif
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group @if($errors->has('id_pengajar')) has-error @endif">
                {{Form::label('Id Pengajar')}}
                {{ Form::number('id_pengajar',null,['class'=>'form-control','placeholder'=>'Masukan Pengajar','required']) }}
                @if($errors->has('id_pengajar'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> Masukan Id Pengajar</span>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="box-footer">
    <a href="{{route('indexJadwalPelajaran')}}" type="button" class="btn btn-primary pull-left" style="margin-right: 5px;">
      <i class="fa fa-reply"></i> Kembali
    </a>
      {{ Form::submit('Simpan',['class'=>'btn btn-success pull-right']) }}
      </div>
      {!! Form::close() !!}
@endsection
