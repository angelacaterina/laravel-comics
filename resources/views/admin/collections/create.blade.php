@extends('layouts.admin.dashboard')

@section('content')
    <h1>Create a new Collection</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('admin.collections.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title')}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- genre --}}
        <div class="form-group">
            <label for="genre">Genre</label>
            <input class="form-control" type="text" name="genre" id="genre" value="{{ old('genre')}}">
        </div>
        @error('genre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- cover --}}
        <div class="form-group">
          <label for="cover">Cover</label>
          <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="coverHelper">
          <small id="coverHelper" class="form-text text-muted">Add a cover image for the current post</small>
        </div>
        @error('cover')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection