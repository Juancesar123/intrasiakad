@extends('app.layouts')

@section('content')
<section class="content-header">
  <h1>
    Data Jadwal
    <small>Menu</small>
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Jadwal</h3>
          <div class="row">
          <div class="col-md-1"></div>
          <div class="form-group col-md-6">
            <label for="Name">Kode Mata Pelajaran:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="form-group col-md-6">
            <label for="Name">Name Guru:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="form-group col-md-6">
            <label for="Name">Name Pelajaran:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
                <div class="form-group col-md-6" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
          </div>                 
@stop
