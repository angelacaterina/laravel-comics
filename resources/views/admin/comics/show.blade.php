@extends('layouts.admin.dashboard')

@section('content')
    @if($comic->cover)
    <img src="{{ asset('storage/' . $comic->cover)}}" alt="">
    @endif
    @if($comic->jumbotron)
    <img src="{{ asset('storage/' . $comic->jumbotron)}}" alt="">
    @endif
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>

    <p>Available: {{$comic->available ? 'si' : 'no'}}</p>
    <p>US price: {{$comic->US_price}} $</p>
    <p>On sale date: {{$comic->on_sale_date}}</p>
    <p>Volume/Issue#: {{$comic->volume_issue}}</p>
    <p>Trim size: {{$comic->trim_size}}</p>
    <p>Page count: {{$comic->page_count}}</p>
    <p>Rated: {{$comic->rated}}</p>

@endsection