@extends('layouts.dashboard')

@section('content')
    <h1>All posts for the admin</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->slug}}</td>
                <td>
                    <a href="{{ route('admin.posts.show', ['post'=>$value->slug] )}}" class="btn btn-primary"><i class="far fa-eye fa-xs fa-fw"></i></a>
                    <a href="{{ route('admin.posts.edit', ['post'=>$value->id] )}}" class="btn btn-warning"><i class="fas fa-edit fa-xs fa-fw"></i></a>
                    <!-- MODO 1: Eliminazione istantanea del Post -->
                    <form action="{{ route('admin.posts.destroy', ['post'=> $value->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt fa-xs fa-fw"></i></button>
                    </form>

                    <!-- MODO 2: Eliminazine con conferma del Post -->
                    <!-- Button trigger modal -->
                    {{-- <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#destroy-{{$value->id}}">
                        <i class="fas fa-trash-alt fa-xs fa-fw"></i>
                    </button> --}}
                    
                    <!-- Modal -->
                    {{-- <div class="modal fade" id="destroy-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="post-destroy-{{$value->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Post {{$value->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    sei sicuro? 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('admin.posts.destroy', ['post'=> $value->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection