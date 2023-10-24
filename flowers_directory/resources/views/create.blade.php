@extends('layout')

@section('title', 'Add Flower')
@section('content')
<div class="container">
    <h1 class="text-center mt-5">Add a New Flower</h1>

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
            <form action="{{ route('flowers.store') }}" method="POST">
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
                            <label for="name">Flower Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Flower Name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Enter Description">
                        </div>
                
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control" placeholder="Enter Image">
                        </div>
                        <div class="form-group">
                            <label for="origin">Origin</label>
                            <input type="text" name="origin" id="origin" class="form-control" placeholder="Enter Origin">
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
