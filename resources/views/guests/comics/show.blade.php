@extends('layouts.guests.app')

@section('content')
    
    <main id="main_content_comic">
        <div class="jumbotron_comics">
            <div class="image_jumbotron">
                @if($comic->jumbotron)
                    <img src="{{ asset('storage/' . $comic->jumbotron) }}" alt="">
                @endif
            </div>
            <div class="banner_jumbotron"></div>
            <div class="cover_jumbotron">
                <div class="cover">
                    @if($comic->cover)
                        <img src="{{ asset('storage/' . $comic->cover)}}" alt="">
                    @endif
                    <div class="view_galley">View Galley</div>
                    <span class="comic_book">Comic Book</span>
                </div>
                
            </div>
        </div>
        
    </main>
    <div class="card mb-4">

        <div class="card-body">
            
            <h4 class="card-title">{{ $comic->title }}</h4>
            <p class="card-text">{{ $comic->description }}</p>

            <p>Available: {{$comic->available ? 'si' : 'no'}}</p>
            <p>US price: {{$comic->US_price}} $</p>
            <p>On sale date: {{$comic->on_sale_date}}</p>
            <p>Volume/Issue#: {{$comic->volume_issue}}</p>
            <p>Trim size: {{$comic->trim_size}}</p>
            <p>Page count: {{$comic->page_count}}</p>
            <p>Rated: {{$comic->rated}}</p>
        </div>
    </div>
       
    
@endsection