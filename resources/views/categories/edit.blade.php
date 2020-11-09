@extends('layouts.app')

@section('content')
    <form action="{{ route('category.update',$category->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="card">
            <div class="card-header">
                Edit Category
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" value="{{ $category->name }}" type="text" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Edit" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection