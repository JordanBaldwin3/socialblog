@extends('layouts.app')

@section('content')
<h1 class="text-center my-5"> {{ $post->title}} </h1>
    <div>
        <form action="{{ route('destroy', $post->id) }}" method="POST">
            @csrf
            <div class="form-group text-center my-5">
                <img src="{{asset('storage/app/')}}/{{ $post->image->filename }}">
            </div>
            <div class="form-group text-center my-5">
                {{ $post->body }}
                {{ $post->image->filename }}
                {{asset('storage/app/')}}/{{ $post->image->filename }}
            </div>
            <div class="form-group text-center my-5">
                <hr>
                    <small>Created on {{ $post->created_at }}</small>
                <hr>
            </div>
            <div class="form-group">
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                <a href={{ url()->previous() }} class="btn btn-primary">Back</a>
                <button onclick="return confirm('Delete post?')" class="btn btn-danger">
                    Delete
                </button>
            </div>
        </form>
    </div>
    <div class="panel-body">
        <form action="{{ route('comment.store', $post->id) }}" method="COMMENT">
            @csrf
            <div class="form-group">
                <textarea required="required" placeholder="Enter comment here" name="body" class="form-control"></textarea>
            </div>
            <input type="submit" class="btn btn-success" value="Comment" />
        </form>
    </div>
    <div>
        <ul style="list-style: none; padding: 0">
        @if($post->comments)
            @foreach($post->comments as $comment)
            <li class="panel-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <p>{{ $comment->body }}</p>
                    </div>
                    <div class="list-group-item">
                        <p>Posted by {{ $comment->user->name }}</p>
                        <small>{{ $comment->created_at->format('M d,Y \a\t h:i a') }}</small>
                    </div>
                </div>
            </li>
            @endforeach
        @else
            <p>No Comments Yet. Be the first!</p>
        @endif
        </ul>
    </div>
@endsection