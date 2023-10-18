@extends('layout')

@section('title', 'Add Authors')
@section('content')
    <h1 class="d-flex justify-content-center m-5">Add a New Author</h1>

    <div class="container">
        <div class="card">
        <div class="card-header">
    <div class="row">
        <div class="col-md-6">
            <h3>Add Author</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('authors.index') }}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>

            <div class="card-body py-4"> <!-- Thu nhỏ card-body -->
                <form action="{{ route('authors.store') }}" method="POST">
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
                            <!-- <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" name="id" id="id" class="form-control" placeholder="Enter ID">
                            </div> -->
                            <div class="form-group">
                                <label for="name">Author Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Author Name">
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
