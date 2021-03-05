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
        <section class="view_comics">
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
                        
                        <div class="check">
                            check availability <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
    
                    <p class="description">{{ $comic->description }}</p>
                </div>
                <div class="community">
                    <h2>Community</h2>
                </div>
            </div>
            {{-- /.info_comics --}}
        </section>
        
        <section class="talent_specs">
            <div class="tables">
                <div class="talent col_2">
                    <h2>Talent</h2>
                    <div class="table_content">
                        <div class="name_table">Art by:</div>
                        <div class="body_table">
                            <a href="#">Nome artista</a>
                        </div>
                    </div>
                    <div class="table_content">
                        <div class="name_table">Written by:</div>
                        <div class="body_table">
                            <a href="#">Nome artista</a>
                        </div>
                    </div>
                </div>
                {{-- /.talent --}}
                <div class="specs col_2">
                    <h2>Specs</h2>
                    <div class="table_content">
                        <div class="name_table">Series:</div>
                        <div class="body_table">
                            <a href="#">Nome serie</a>
                        </div>
                    </div>

                    <div class="table_content">
                        <div class="name_table">U.S. Price:</div>
                        <div class="body_table">{{$comic->US_price}}</div>
                    </div>
                    <div class="table_content">
                        <div class="name_table">On Sale Date:</div>
                        <div class="body_table">{{$comic->on_sale_date}}</div>
                    </div>
                    <div class="table_content">
                        <div class="name_table">Volume/Issue #:</div>
                        <div class="body_table">{{$comic->volume_issue}}</div>
                    </div>
                    <div class="table_content">
                        <div class="name_table">Trim Size:</div>
                        <div class="body_table">{{$comic->trim_size}}</div>
                    </div>
                    <div class="table_content">
                        <div class="name_table">Page Count:</div>
                        <div class="body_table">{{$comic->page_count}}</div>
                    </div>
                    <div class="table_content">
                        <div class="name_table">Rated:</div>
                        <div class="body_table">{{$comic->rated}}</div>
                    </div>
                </div>
                {{-- /.specs --}}
            </div>
        </section>
        {{-- /.talent_specs --}}

        <section class="shop">
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </section>
        {{-- /.shop --}}

        
    </main>
    {{-- /#main_content_comic --}}

@endsection