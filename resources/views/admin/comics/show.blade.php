@extends('layouts.admin.dashboard')

@section('content')
    <div class="show_admin">
        <div class="card_show">
            <div  class="jumbotron_img">
                @if($comic->jumbotron)
                    <img src="{{ asset('storage/' . $comic->jumbotron)}}" alt="">
                @endif
                <div  class="cover">
                    @if($comic->cover)
                        <img src="{{ asset('storage/' . $comic->cover)}}" alt="">
                    @endif
                </div>
            </div>
          
            <h1>
                {{$comic->title}}
                <span class="{{$comic->available ? 'green' : 'red'}}">
                    <i class="fas fa-circle"></i>
                </span>
            </h1>
            <p>{{$comic->description}}</p>
        
            <div class="card_info">
                {{-- <p>Available: {{$comic->available ? 'si' : 'no'}}</p> --}}

                <div class="info_content">
                    <div class="name_info">Series:</div>
                    <div class="body_info">{{$comic->collection ? $comic->collection->genre : 'N/A'}}</div>
                </div>

                <div class="info_content">
                    <div class="name_info">Art by:</div>
                    <div class="body_info"></div>
                </div>

                <div class="info_content">
                    <div class="name_info">Written by:</div>
                    <div class="body_info"></div>
                </div>

                <div class="info_content">
                    <div class="name_info">U.S. Price:</div>
                    <div class="body_info">${{$comic->US_price}}</div>
                </div>
                <div class="info_content">
                    <div class="name_info">On Sale Date:</div>
                    <div class="body_info">{{$comic->on_sale_date}}</div>
                </div>
                <div class="info_content">
                    <div class="name_info">Volume/Issue #:</div>
                    <div class="body_info">{{$comic->volume_issue}}</div>
                </div>
                <div class="info_content">
                    <div class="name_info">Trim Size:</div>
                    <div class="body_info">{{$comic->trim_size}}</div>
                </div>
                <div class="info_content">
                    <div class="name_info">Page Count:</div>
                    <div class="body_info">{{$comic->page_count}}</div>
                </div>
                <div class="info_content">
                    <div class="name_info">Rated:</div>
                    <div class="body_info">{{$comic->rated}}</div>
                </div>

            </div>
        </div>
    </div>
    
@endsection