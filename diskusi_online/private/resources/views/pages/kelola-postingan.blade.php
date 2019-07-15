@extends('dashboard')
@section('main')
<main class="main">
<div class="container">
<div class="card">
<div class="card-body">
<div class="row">
<table class="table table-condensed">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Isi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    @foreach($post as $p)
      <tr>
        <td>1</td>
        <td>{{substr($p->judul, 0, 100)}}</td>
        <td>{{$p->kategori}}</td>
        <td>{{ substr($p->isi, 0, 100) }}</td>
        <td>
            <a href="{{route('kelola-postingan-delete', $p->id)}}" name="delete" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
    @endforeach

    </tbody>
  </table>
  </div>
  </div>
</div>
</div>
</main>
@stop

@section('footer')
@stop