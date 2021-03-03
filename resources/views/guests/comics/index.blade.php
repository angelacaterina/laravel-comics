@extends('layouts.app')

@section('content')
    <h1>Blog</h1>
    @foreach ($comics as $item)
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">{{ $item->title }}</h4>
                <p class="card-text">{{ $item->body }}</p>
            </div>
        </div>
    @endforeach
@endsection