@extends('app.layouts')

@section('content')
<section class="content-header">
  <h1>
    Data Guru
    <small>Menu</small>
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Guru</h3>

          <div class="row">
          <div class="col-md-1"></div>
          <div class="form-group col-md-6">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="form-group col-md-6">
            <label for="Address">Address:</label>
            <input type="text" class="form-control" name="Address">
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
            <div class="form-group col-md-6">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-1"></div>
            <div class="form-group col-md-6">
              <label for="Number">Phone Number:</label>
              <input type="text" class="form-control" name="number">
            </div>
          </div>
          <div class="row">
          <div class="col-md-1"></div>
          <div class="form-group col-md-6">
            <label for="Birt of Date">Birt of Date:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
         <div class="row">
          <div class="col-md-1"></div>
            <div class="form-group col-md-6">
                <label>Gender</label>
                <select name="office">
                  <option value="">Chose</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="form-group col-md-6" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
@stop
