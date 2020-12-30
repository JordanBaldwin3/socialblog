@extends('layouts.app')

@section('content')
<h1>{{ $post->title}}</h1>

<div>
    {!!$post->body!!}
</div>
<hr>
<small>Created on {{ $post->created_at }}</small>
<hr>
<a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
<a href="/home" class="btn btn-primary">Back</a>

@endsection