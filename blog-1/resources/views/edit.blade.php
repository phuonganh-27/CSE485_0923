<!-- Tệp: resources/views/categories/edit.blade.php -->
@extends('layout')

@section('content')
    <h1 class="d-flex justify-content-center m-5">Edit Category</h1>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Edit Category</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{ route('categories.index') }}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>

            <div class="card-body py-4"> <!-- Thu nhỏ card-body -->
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" name="id" value="{{ $category->id }}" id="id" class="form-control" placeholder="Enter ID">
                            </div>
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" value="{{ $category->name }}" id="name" class="form-control" placeholder="Enter Category Name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" placeholder="Enter Description">{{ $category->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success mt-2">Update</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
