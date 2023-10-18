@extends('layout')

@section('title', 'Homepage')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header ">
                <div class="row ">
                    <div class="col-md-8 ">
                        <h3>Authors List</h3>
                    </div>
                    <div class="col-md-1 text-right">
                        <a href="{{ route('books.index') }}" class="btn btn-success">Book</a>
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="{{ route('authors.create') }}" class="btn btn-warning">Add a new Author</a>
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
                            <th>Author Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($authors as $author)
                            <tr>
                                <td>{{ $author->id }}</td>
                                <td>{{ $author->name }}</td>
                                <td>
                                    <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="d-inline">
                                    <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-success">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this author?')">Delete</button>
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

