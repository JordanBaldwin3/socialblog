@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="form-group text-center my-5">
        <h1>  Tag Control Panel </h1>
    </div>
        <table class="table">
    <thead>
        <tr>
            <th scope="col">Tags</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tags as $tag)
        <tr>
            <td>{{ $tag->name}}</td>
            <td>
                <form action="{{ route('delete.tag', $tag->id) }}" method="POST">
                @csrf
                <button onclick="return confirm('Delete user?')" class="btn btn-danger">
                    Delete
                </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    <form action="{{ route('store.tag') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tag">New Tag</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <button type="submit"class="btn btn-success">
                    Create
                </button>
            </div>
        </form>
</div>
@endsection