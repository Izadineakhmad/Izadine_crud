@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('kategori.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="deskripsi">Description</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi">
    </div>
    <a href="{{route('kategori.index')}}" class="btn btn-secondary">Back</a>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>
@endsection
