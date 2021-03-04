@extends('layouts.dashboard')

@section('content')
    @if($comic->cover)
    <img src="{{ asset('storage/' . $comic->cover)}}" alt="">
    @endif
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>
@endsection