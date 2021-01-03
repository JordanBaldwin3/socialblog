@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-body">
        <form action="{{ route('profile.show', Auth::user()->id) }}" method="PROFILE">
            @csrf
            <div class="form-group text-center my-5">
                <img src="{{url('/images')}}/{{ $profile->image->filename }}">
            </div>
            <div class="form-group text-center my-5">
                <h1> {{ $profile->user->name }} </h1>
            </div>

            <div class="form-group text-center my-5">
                <h3>{!!$profile->bio!!}</h3>
            </div>

        </form>
    </div>
</div>
@endsection