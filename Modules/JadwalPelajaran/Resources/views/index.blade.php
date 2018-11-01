@extends('app.layouts')
@section('content header','Data Jadwal')
@section('content')
    <div class="row">
        <div class="col-lg-12">
        <div class="box">
        <div class="box-header">
              <h3 class="box-title">Data Jadwal Kursus</h3>
              <a class="btn btn-primary pull-right" href="{{route('addformJadwalPelajaran')}}" ><i class="fa fa-plus"></i> Tambah Jadwal Kursus</a>
        </div>
        <div class="box-body">
   <table id="example2" class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Hari</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th>Id Kursus</th>
        <th>Id Pengajar</th>
        <th>Opsi</th>
    </tr>
    @php $no=1 @endphp
    @php $datajadwal=[1] @endphp
    @foreach ($datajadwal as $data)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ @$data->hari }}</td>
        <td>{{ @$data->jammulai }}</td>
        <td>{{ @$data->jamselesai }}</td>
        <td>{{ @$data->idkursus }}</td>
        <td>{{ @$data->idpengajar }}</td>
        <td>
        <a href="datajadwalkursus/edit/{{@$data->id}}" class="btn btn-success"><i class="fa fa-edit"></i> Update </a>
        <a href="datajadwalkursus/delete/{{@$data->id}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete </a>
        </td>
    </tr>
    @endforeach
   </table>
      </div>
      </div>
      </div>
    </div>
@stop
