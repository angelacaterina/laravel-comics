@extends('layouts.guests.app')

@section('content')
    <main id="main_content_comics">

        <section id="comics_graphic_novels">
            {{-- <div class="title">
                <h2>COMICS & GRAPHIC NOVELS</h2>
            </div> --}}
            <div class="card_conteiner">
                @foreach ($comics as $item)
                    <div class="card_comics">
                        <div class="comics">
                            @if($item->cover)
                                <a href="{{ route('comics.show', ['comic'=>$item->slug] )}}"><img src="{{ asset('storage/' . $item->cover)}}" alt=""></a>
                            @endif
                        
                            <div class="title_available">
                                <p class="title_comics">{{ $item->title }}</p>
                                <p class="available_comics">{{$item->available ? 'Available Now' : 'Unavailable'}}</p>
                            </div>
                        </div>
                    </div> 
                @endforeach           
            </div>
        </section>
    </main>
@endsection