@extends('layouts.admin.dashboard')

@section('content')
    <h1>Create a new Comics</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('admin.comics.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title')}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- description --}}
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="10"> {{ old('description')}}</textarea>
        </div>
        @error('description')
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

        {{-- jumbotron --}}
        <div class="form-group">
            <label for="jumbotron">Jumbotron</label>
            <input type="file" class="form-control-file" name="jumbotron" id="jumbotron" placeholder="Add a jumbotron image" aria-describedby="jumbotronHelper">
            <small id="jumbotronHelper" class="form-text text-muted">Add a jumbotron image for the current post</small>
        </div>
        @error('jumbotron')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Available --}}
        <div class="form-group">
            <label for="available">Available</label>
            <select class="form-control" name="available" id="available">
                <option value=1>Si</option>
                <option value=0>No</option>
            </select>
        </div>
        @error('available')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- US_price --}}
        <div class="form-group">
            <label for="US_price">U.S. Price</label>
            <input class="form-control" type="text" name="US_price" id="US_price" value="{{ old('US_price')}}">
        </div>
        @error('US_price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- on_sale_date --}}
        <div class="form-group">
            <label for="on_sale_date">On Sale Date</label>
            <input class="form-control" type="text" name="on_sale_date" id="on_sale_date" value="{{ old('on_sale_date')}}">
        </div>
        @error('on_sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- volume_issue --}}
        <div class="form-group">
            <label for="volume_issue">Volume/Issue#</label>
            <input class="form-control" type="text" name="volume_issue" id="volume_issue" value="{{ old('volume_issue')}}">
        </div>
        @error('volume_issue')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- trim_size --}}
        <div class="form-group">
            <label for="trim_size">Trim size</label>
            <input class="form-control" type="text" name="trim_size" id="trim_size" value="{{ old('trim_size')}}">
        </div>
        @error('trim_size')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- page_count --}}
        <div class="form-group">
            <label for="page_count">Page count</label>
            <input class="form-control" type="text" name="page_count" id="page_count" value="{{ old('page_count')}}">
        </div>
        @error('page_count')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- rated --}}
        <div class="form-group">
            <label for="rated">Rated</label>
            <input class="form-control" type="text" name="rated" id="rated" value="{{ old('rated')}}">
        </div>
        @error('trim_size')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection