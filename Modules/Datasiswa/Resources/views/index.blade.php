@extends('app.layouts')
@section('content header','Data Peserta')
@section('content')
<div class="row">
        <div class="col-lg-12">
        <div class="box">
        <div class="box-header">
              <h3 class="box-title">Data Peserta</h3>
              <a class="btn btn-primary pull-right" href="{{url('datasiswa/create')}}" ><i class="fa fa-plus"></i> Tambah Peserta</a>
        </div>
        <div class="box-body">
   <table id="example2" class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Nama Peserta</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Nomor Telepon</th>
        <th>Gambar</th>
        <th>Opsi</th>
    </tr>
    @foreach ($datasiswa as $index => $data)
    <tr>
        <td>{{ $index }}</td>
        <td>{{ @$data->namapeserta }}</td>
        <td>{{ @$data->alamat }}</td>
        <td>{{ @$data->email }}</td>
        <td>{{ @$data->nomortelepon }}</td>
        <td>{{ @$data->gambar }}</td>
        <td>
        <a href="{{url('datasiswa/edit/'.$data->id)}}" class="btn btn-success"><i class="fa fa-edit"></i> Update </a>
        <a href="{{url('datasiswa/delete/'.$data->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete </a>
        </td>
    </tr>
    @endforeach
   </table>
      </div>
      </div>
      </div>
    </div>
@stop
