@extends('app.layouts')
@section('content header','Data Guru')
@section('content')
    <div class="row">
        <div class="col-lg-12">
        <div class="box">
        <div class="box-header">
              <h3 class="box-title">Data Tabel Guru</h3>
        </div>
        <div class="box-body">
   <table id="example2" class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Nama Pengajar</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telp</th>
        <th>Gambar</th>
        <th>Opsi</th>
    </tr>
    @php $no=1 @endphp
    @foreach($dataguru as $data)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $data->namapengajar }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->nomortelepon }}</td>
        <td>{{ $data->gambar }}</td>
        <td>
            <button> Update </button>
            <button> Hapus </button>
         </td>
    </tr>
    @endforeach
   </table>
      </div>
      </div>
      </div>
    </div>
@stop
