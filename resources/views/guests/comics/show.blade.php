@extends('layouts.guests.app')

@section('content')
    <h1>Index</h1>
    @foreach ($comics as $item)
        <div class="card mb-4">
            <div class="card-body">
                @if($item->cover)
                <img src="{{ asset('storage/' . $item->cover)}}" alt="">
                @endif
                <h4 class="card-title">{{ $item->title }}</h4>
                <p class="card-text">{{ $item->description }}</p>

                <p>Available: {{$item->available ? 'si' : 'no'}}</p>
                <p>US price: {{$item->US_price}} $</p>
                <p>On sale date: {{$item->on_sale_date}}</p>
                <p>Volume/Issue#: {{$item->volume_issue}}</p>
                <p>Trim size: {{$item->trim_size}}</p>
                <p>Page count: {{$item->page_count}}</p>
                <p>Rated: {{$item->rated}}</p>
            </div>
        </div>
    @endforeach
@endsection