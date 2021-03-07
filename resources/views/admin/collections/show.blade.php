@extends('layouts.admin.dashboard')

@section('content')

    <div class="show_admin">
        <div class="card_show d-flex">
            <div  class="cover">
                @if($collection->cover)
                    <img src="{{ asset('storage/' . $collection->cover)}}" alt="">
                @endif
            </div>
        
            <div class="card_text flex_column_center_center px-4">
                <h1>{{$collection->title}}</h1>
                <p>{{$collection->genre}}</p>
            </div>
        </div>
    </div>
   
@endsection