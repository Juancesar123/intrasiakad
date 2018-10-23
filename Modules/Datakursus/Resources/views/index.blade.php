@extends('app.layouts')
@section('content header','Data Kursus')
@section('content')
    <div class="row">
        <div class="col-lg-12">
        <div class="box">
        <div class="box-header">
              <h3 class="box-title">Data Tabel Kursus</h3>
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