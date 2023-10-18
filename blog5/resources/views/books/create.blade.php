
@extends('layout')

@section('title', 'Add Books')
@section('content')
    <h1 class="d-flex justify-content-center m-5">Add a New Book</h1>

    <div class="container">
        <div class="card">
        <div class="card-header">
    <div class="row">
        <div class="col-md-6">
            <h3>Add Book</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('books.index') }}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>

            <div class="card-body py-4"> <!-- Thu nhỏ card-body -->
                <form action="{{ route('books.store') }}" method="POST">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                    @csrf
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <textarea type="text" name="title" id="title" class="form-control" placeholder="Enter Title"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="author">Author ID</label>
                                <input type="text" name="author_id" id="author_id" class="form-control" placeholder="Enter Author ID">
                            </div>
                            
                            <button type="submit" class="btn btn-success mt-2">Save</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
