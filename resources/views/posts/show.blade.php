@extends('layouts.app')

@section('content')
<h1 class="text-center my-5"> {{ $post->title}} </h1>
    <div class="text-center my-5">
        {!!$post->body!!}
    </div>
    <hr>
        <small>Created on {{ $post->created_at }}</small>
    <hr>
    <div>
        <form action="{{ route('destroy', $post->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                <a href="/home" class="btn btn-primary">Back</a>
                <button onclick="return confirm('Delete post?')" class="btn btn-danger">
                    Delete
                </button>
            </div>
        </form>
    </div>
@endsection