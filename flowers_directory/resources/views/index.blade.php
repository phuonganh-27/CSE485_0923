@extends('layout')

@section('title', 'Homepage')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-secondary">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="text-white">Flowers List</h3>
                </div>
                <div class="col-md-3 ">
                    <a href="{{ route('flowers.create') }}" class="btn btn-primary">Add a New Flower</a>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            @if(Session::has('Message'))
            <div class="alert alert-info">
                {{ Session::get('Message') }}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Flower Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Origin</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flowers as $flower)
                    <tr>
                        <td>{{ $flower->id }}</td>
                        <td><a class="text-decoration-none " href="{{ route('flowers.show', $flower->id) }}" >{{$flower->name}}</a></td>
                        <td>{{ $flower->description }}</td>
                        <td>{{ $flower->image }}</td>
                        <td>{{ $flower->origin }}</td>
                    
                        <td><a href="{{ route('flowers.edit', $flower->id) }}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" class="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this flower?')">Delete</button>
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
