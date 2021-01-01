@extends('layouts.app')

@section('content')
<h1 class="text-center"> Timeline </h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                @if (count($posts) > 0)
                    @foreach($posts as $post)
                        <h1 class="text-center my-5">
                            <a href="/posts/{{ $post->id }}">{{ $post->title}}</a> 
                        </h1>
                        <div class="list-group">
                            <small>Posted by {{ $post->user->name }}</small>
                            <small>Created on {{ $post->created_at->format('M d,Y \a\t h:i a') }}</small>
                        </div>         
                    @endforeach
                    {{ $posts->links('pagination::bootstrap-4')}}
                @else
                    <p>No posts found</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
