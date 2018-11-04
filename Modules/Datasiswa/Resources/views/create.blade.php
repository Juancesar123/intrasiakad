@extends('app.layouts')

@section('content')
    <hr>
    <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Data Peserta</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form">
             <div class="box-body">
               <div class="form-group">
                  <label>Nama :</label>
                  <input type="text" class="form-control" name="name">
               </div>
               <div class="form-group">
                  <label>Alamat :</label><br>  
                  <textarea name="address" rows="4" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;width: 100%;"></textarea>   
               </div>
               <div class="form-group">
                  <label>Email :</label>
                  <input type="email" class="form-control" name="email">
               </div>
               <div class="form-group">
                  <label>Nomor Telpon:</label>
                  <input type="text" class="form-control" name="number">
               </div>
               <div class="form-group">
                  <label>Foto :</label>
                  <input type="file" class="form-control" name="image">    
               </div>
             </div>
             <!-- /.box-body -->

             <div class="box-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
             </div>
           </form>
         </div>
@endsection

