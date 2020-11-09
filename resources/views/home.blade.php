@extends('layouts.app')

@section('content')
    <div class="row py-3">
        <a href="{{ route('post.create') }}" class="btn btn-primary mr-3">Create Post</a>
        <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
    </div>
    <div class="row py-3">
        <div class="col-9">
            @foreach ($posts as $post)    
                <div class="card mb-2">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">{{ $post->title }}</p>
                            <footer class="blockquote-footer">{{ $post->category->name }}</footer>
                        </blockquote>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('post.show',$post->id) }}" class="btn btn-success">Read More</a>
                        <a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('post.destroy',$post->id) }}" method="POST" class="d-inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    Categories
                </a>
                @foreach ($categories as $category)
                    <a href="{{ route('category.show',$category->id) }}" class="list-group-item list-group-item-action">{{ $category->name }} ({{ $category->posts->count() }})</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection