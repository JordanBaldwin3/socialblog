@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">Back</a>
<h1>{{ $post->title}}</h1>

<div>
    {!!$post->body!!}
</div>
<hr>
<small>Written om {{ $post->create_at}}</small>
<hr>
<a href="/post/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

@endsection