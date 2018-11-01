@extends('app.layouts')

@section('content')
<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title">Form Update Data Guru</h3>
	</div>
	{{ Form::model($dataguru,['route' => ['updateDataGuru', $dataguru->id], 'method' => 'patch']) }}
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('ID Guru') }}
					{{ Form::text('id',null,['class'=>'form-control','readonly']) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Nama') }}
					{{ Form::text('namaguru',null,['class'=>'form-control','placeholder'=>'Masukan Nama Guru Kursus']) }}
				</div>
			</div>
            <div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Alamat') }}
					{{ Form::text('alamat',null,['class'=>'form-control','placeholder'=>'Masukan Alamat']) }}
				</div>
			</div>
            <div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Email') }}
					{{ Form::text('Email',null,['class'=>'form-control','placeholder'=>'Masukan Email']) }}
				</div>
			</div>
            <div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Namor Telepon') }}
					{{ Form::text('nomortelepon',null,['class'=>'form-control','placeholder'=>'Masukan Nomor Telepon']) }}
				</div>
			</div>
            <div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Namor Telepon') }}
					{{ Form::text('nomortelepon',null,['class'=>'form-control','placeholder'=>'Masukan Nomor Telepon']) }}
				</div>
			</div>
            <div class="form-group">
                            <label for="imageInput" class="col-sm-4 control-label">I</label>
                            <div class="col-sm-4">
                                <input type="file" class="" id="gambar" name="images" onchange="ShowImage(this);" required>
                                <img class="center" src="" alt="" id='gambar'>
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
