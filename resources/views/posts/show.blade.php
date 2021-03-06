@extends('layouts.app')

@section('content')
<h1 class="text-center my-1"> {{ $post->title}} </h1>
    <div>
        <form action="{{ route('destroy', $post->id) }}" method="POST">
            @csrf

            @if($post->image)
            <div class="form-group text-center my-2">
                <img src="{{url('/images')}}/{{ $post->image->filename }}" alt=" ">
            </div>
            @else
            @endif

            <div class="form-group text-center my-2">
                {{ $post->body }}
            </div>
            
            <div class="form-group left-aligned my-2">
            <p> Tags </p>
                @foreach($post->tags as $tag)
                    <li> {{ $tag->name }}</li>
                @endforeach
            </div>

            @if($post->user == Auth::user() | Auth::user()->isAdmin())
            <div class="form-group">
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit</a>
                
                <button onclick="return confirm('Delete post?')" class="btn btn-outline-danger float-right">
                    Delete
                </button>
            </div>
            @else
            @endif
        </form>
    </div>
    <div class="panel-body">
        <form action="{{ route('comment.store', $post->id) }}" method="COMMENT">
            @csrf
            <div class="form-group">
                <textarea required="required" placeholder="Enter comment here" name="body" class="form-control"></textarea>
            </div>
            <input type="submit" class="btn btn-outline-success" value="Comment" />
        </form>
    </div>
    <div>
        <ul style="list-style: none; padding: 0">
        @if($post->comments)
            @foreach($post->comments as $comment)
            <li class="panel-body text-center rounded">
                <div class="list-group">
                    <div class="list-group-item">
                        <p>{{ $comment->body }}</p>
                    </div>
                    <div class="list-group-item">
                        <p>Posted by <a href="/profiles/{{ $comment->user->id }}"> {{ $comment->user->name }}</a></p>
                        <small>Created on: {{ $comment->created_at->format('M d,Y \a\t h:i a') }}</small>
                        <small>Last updated: {{ $comment->updated_at->format('M d,Y \a\t h:i a') }}</small>
                        @if($comment->user == Auth::user() | Auth::user()->isAdmin())
                            <a href="/comments/{{ $comment->id }}/edit" class="btn btn-outline-primary btn-sm float-right">Edit</a>
                        @else
                        @endif
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