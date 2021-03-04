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
        {{-- /.jumbotron_comics --}}
        <div class="info_comics_community">
            <div class="info_comics">
                <h1 class="title">{{ $comic->title }}</h1>

                <div class="check_availability">
                    <div class="price_status">
                        <div class="price">
                            U.S. Price: ${{$comic->US_price}} 
                        </div>
                        <div class="status">
                            {{$comic->available ? 'available' : 'unavailable'}}
                        </div>
                    </div>
                    
                    <div class="check">check availability</div>
                </div>

                <p class="description">{{ $comic->description }}</p>
            </div>
            <div class="community">
                <h2>Community</h2>
            </div>
        </div>
        {{-- /.info_comics --}}
        
    </main>
    <div class="card mb-4">

        <div class="card-body">
            
            

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