@extends('dashboard')
@section('main')
<main class="main">
<div class="card">
              <div class="card-body">
                <div class="row">
                
        <input type="text" name="judul" class="form-control" placeholder="Masukan Kategori">
        <input type="submit" value="Post" name="post" class="btn btn-primary ukuran"> 
        <input type="submit" value="Batal" name="batal" class="btn-danger ukuran">
       
       </div>
       </div>
       </div> 
</main>
@stop

@section('footer')
@stop