@extends('layouts.app')

@section('content')
<h1 class="text-center my-5"> Your Timeline </h1>

<div class="d-flex justify-content-end mb-2">
    @foreach($posts as $post)
    <h1 class="text-center my-5"> {{ $post->title}}</h1>
    @endforeach
</div>
@endsection