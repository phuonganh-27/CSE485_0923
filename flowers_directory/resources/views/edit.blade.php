@extends('layout')

@section('title', 'Edit Flower')
@section('content')
<div class="container">
    <h1 class="text-center mt-5">Edit Flower</h1>

    <div class="card mt-3">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Flower</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('flowers.index') }}" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('flowers.update', $flower->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Flower Name</label>
                            <input type="text" name="name" value="{{ $flower->name }}" id="name" class="form-control" placeholder="Enter Flower Name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="{{ $flower->description }}" id="description" class="form-control" placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="image">Current Image</label>
                            @if ($flower->image)
                                <img src="{{ $flower->image }}" alt="Current Image" class="img-thumbnail" style="max-width: 100px">
                            @else
                                <p>No Image Available</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="new_image">New Image</label>
                            <input type="file" name="image" id="new_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="origin">Origin</label>
                            <input type="text" name="origin" value="{{ $flower->origin }}" id="origin" class="form-control" placeholder="Enter Origin">
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
