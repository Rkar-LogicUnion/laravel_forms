@extends('layouts.app')

@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card">
            <div class="card-header">
                Create Post
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Category</label>
                    <select name="category" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Choose Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Create" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection