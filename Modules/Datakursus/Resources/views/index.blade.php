@extends('app.layouts')
@section('content header','Data Kursus')
@section('content')
    <div class="row">
        <div class="col-lg-12">
        <div class="box">
        <div class="box-header">
              <h3 class="box-title">Data Tabel Kursus</h3>
              <a class="btn btn-primary pull-right" href="{{route('addform')}}" ><i class="fa fa-plus"></i> Tambah Kursus</a>
        </div>
        <div class="box-body">
   <table id="example2" class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Nama Kursus</th>
        <th>Dibuat Pada</th>
        <th>Opsi</th>
    </tr>
    @php $no=1 @endphp
    @foreach($datakursus as $data)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $data->namakursus }}</td>
        <td>{{ $data->createdAt }}</td>
        <td>
            <a href="datakursus/edit/{{$data->id}}" class="btn btn-success"><i class="fa fa-edit"></i> Update </a>
            <a href="datakursus/delete/{{$data->id}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete </a>
         </td>
    </tr>
    @endforeach
   </table>
      </div>
      </div>
      </div>
    </div>
@stop