@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Timeline') }}</div>

                <div class="card-body">
                @foreach($posts as $post)
                    <h1 class="text-center my-5"> {{ $post->title}}</h1>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
