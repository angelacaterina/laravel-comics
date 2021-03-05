@extends('layouts.admin.dashboard')

@section('content')
    @if($collection->cover)
    <img src="{{ asset('storage/' . $collection->cover)}}" alt="">
    @endif
    <h1>{{$collection->title}}</h1>
    <h3>{{$collection->genre}}</h3>


@endsection