@extends('app.layouts')

@section('content')
<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title">Form Update Datakursus</h3>
	</div>
	{{ Form::model($datakursus,['route' => ['updateDatakursus', $datakursus->id], 'method' => 'patch']) }}
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('ID Kursus') }}
					{{ Form::text('id',null,['class'=>'form-control','readonly']) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Nama Kursus') }}
					{{ Form::text('namakursus',null,['class'=>'form-control','placeholder'=>'Masukan Nama Data Kursus']) }}
				</div>
			</div>
		</div>
		<div class="box-footer">
			{{ Form::submit('Update',['class'=>'btn btn-success pull-right']) }}              
		</div>
	</div>
	{{ Form::close() }}
</div>
@stop
