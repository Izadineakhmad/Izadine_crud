@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('kategori.create')}}" class="btn btn-primary">add</a>
<table class="table mt-2">
    <thead>
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($kategori as $item)
        <tr>
            <td>{{$item ->name}}</td>
            <td>{{$item ->deskripsi}}</td>
            <td><form action="{{route('kategori.destroy', $item ->id)}}" method="POST">@csrf
                <a class="btn btn-primary" href="{{route('kategori.edit', $item ->id)}}">Edit</a>
                 <a class="btn btn-primary" href="{{route('kategori.show', $item ->id)}}">Shows</a>
                  @method('DELETE')
                <button class="btn btn-primary">Remove</button>
                </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
