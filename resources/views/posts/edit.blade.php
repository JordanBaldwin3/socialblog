@extends('layouts.app')

@section('content')
<h1 class="text-center my-5"> Edit Post </h1>

<div class="card card-default">
    <div class="card-body">
        <form action="{{ route('update', $post->id) }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="5" rows="5" class="form-control">{{ $post->body }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <div class="form-group">
                <button type="submit"class="btn btn-success">
                    Update Post
                </button>
            </div>
        </form>
    </div>
</div>
@endsection