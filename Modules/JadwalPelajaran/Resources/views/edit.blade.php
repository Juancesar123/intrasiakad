@extends('app.layouts')

@section('content')
<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title">Form Update Data Jadwal Plajaran</h3>
	</div>
	{{ Form::model($dataJadwalPlajaran,['route' => ['jadwalupdate', $dataJadwalPlajaran->id], 'method' => 'patch']) }}
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('ID jadwal plajaran') }}
					{{ Form::text('id',$dataJadwalPlajaran->id,['class'=>'form-control','readonly']) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Hari') }}
					{{ Form::select('hari',  [ 'senin' => 'senin',
						'selasa' => 'selasa',
						'rabo'  => 'rabo',
						'kamis' => 'kamis',
						'jumat' => 'jumat',
						'sabtu' => 'sabtu',
						'minggu'  => 'minggu'
					], $dataJadwalPlajaran->hari, ['placeholder' => $dataJadwalPlajaran->hari ,'class'=>'form-control']) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Jam Mulai') }}
					{{ Form::text('jammulai',$dataJadwalPlajaran->jammulai,['class'=>'form-control','placeholder'=>'Masukan Nama Data Kursus']) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Jam Selesai') }}
					{{ Form::text('jamselesai',$dataJadwalPlajaran->jamselesai,['class'=>'form-control','placeholder'=>'Masukan Nama Data Kursus']) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Khursus ') }}
          {{ Form::select('namakursus',  $kursus, $dataJadwalPlajaran->idkursus, ['placeholder' => $dataJadwalPlajaran->datakursu->namakursus,'class'=>'form-control']) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('Pengajar ') }}
					{{ Form::select('pengajar',  $teacher, $dataJadwalPlajaran->idpengajar, ['placeholder' => $dataJadwalPlajaran->datapengajar->namapengajar,'class'=>'form-control']) }}
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
