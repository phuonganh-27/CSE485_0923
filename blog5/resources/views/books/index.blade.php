@extends('layout')

@section('title', 'Homepage')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Books List</h3>
                    </div>
                    <div class="col-md-2 text-right">
                        <a href="{{ route('books.create') }}" class="btn btn-warning">Add a new Book </a>
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
                            <th>Tilte</th>
                            <th>Author ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author_id }}</td>
                                <td>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
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

