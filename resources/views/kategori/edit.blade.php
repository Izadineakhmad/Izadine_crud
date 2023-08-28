@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('kategori.update', $kategori->id)}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$kategori->name}}">
    </div>
    <div class="form-group">
      <label for="deskripsi">Description</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$kategori->deskripsi}}">
    </div>
    <div class="group mt-3">
        <a href="{{route('kategori.index')}}" class="btn btn-secondary">Back</a>
    <button type="submit" class="btn btn-primary ">Submit</button>
    </div>
  </form>
</div>
@endsection
