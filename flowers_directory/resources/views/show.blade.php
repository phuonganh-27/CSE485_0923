@extends('layout')

@section('title', 'Flower Details')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Flower Details</h4>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label for="name">Name:</label>
                </div>
                <div class="col-md-9">
                    <p>{{ $flower->name }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="description">Description:</label>
                </div>
                <div class="col-md-9">
                    <p>{{ $flower->description }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="image">Image:</label>
                </div>
                <div class="col-md-9">
                    <img src="{{ $flower->image }}" width="200px" alt="{{ $flower->name }}" class="img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="origin">Origin:</label>
                </div>
                <div class="col-md-9">
                    <p>{{ $flower->origin }}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('flowers.index') }}" class="btn btn-primary mt-3">Go Back</a>
</div>
@endsection
