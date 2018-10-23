@extends('app.layouts')

@section('content')
<section class="content-header">
  <h1>
    Data Kursus
    <small>Menu</small>
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Siswa</h3>
          <a href="{{ route('Addform') }}" class="btn btn-app pull-right">
            <i class="fa fa-plus"></i> Tambah
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection
