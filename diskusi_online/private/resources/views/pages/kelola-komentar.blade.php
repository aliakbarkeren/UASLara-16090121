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
        <th>Isi Komentar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    @foreach($komen as $k)
      <tr>
        <td>1</td>
        <td>{{ substr($k->isi, 0, 100) }}</td>
        <td>
            <a href="{{route('kelola-komentar-delete', $k->id)}}" name="delete" class="btn btn-danger btn-sm">Delete</a>
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