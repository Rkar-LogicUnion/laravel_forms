@extends('layouts.app')

@section('content')
    <form action="{{ route('category.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="card">
            <div class="card-header">
                Create Category
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Create" class="btn btn-primary">
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key=>$category)    
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('category.edit',$category->id) }}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" {{ $category->posts->count()>0 ? 'disabled':'' }}>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection