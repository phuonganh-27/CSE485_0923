@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Category Management</h3>
                    </div>
                    <div class="col-md-2 text-right">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('Message'))
                <div class="alert alert-success">
                    {{ Session::get('Message') }}
                </div>

                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

