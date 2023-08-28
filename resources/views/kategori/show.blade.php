@extends('layouts.app')
@section('content')
<div class="container">
<div class="card p-3">
    <h4>{{$kategori->name}}</h4>
    <h4>{{$kategori->deskripsi}}</h4>
    <a href="{{route('kategori.index')}}" class="btn btn-primary">Balik</a>
</div>
</div>
@endsection
