@extends('layouts.app')

@section('content')
<div class="jumbotron bg-dark text-white ">
<h1 class="text-center bg-dark text-white"> Timeline </h1>
</div>
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded ">
                <div class="card-body ">
                @if (count($posts) > 0)
                    @foreach($posts as $post)
                    <div>
                        <h1 class="text-center my-5">
                            <a href="/posts/{{ $post->id }}">{{ $post->title}}</a> 
                        </h1>
                        <div class="list-group">
                            <small>Posted by <a href="/profiles/{{ $post->user->id }}"> {{ $post->user->name }}</a></small>
                            <small>Created on {{ $post->created_at->format('M d,Y \a\t h:i a') }}</small>
                        </div>
                        <hr>
                    </div>             
                    @endforeach
                    {{ $posts->links('pagination::bootstrap-4') }}
                @else
                    <p>No posts found</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
