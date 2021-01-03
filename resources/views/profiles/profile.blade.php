@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-header text-center my-5">
        <h1> 
            {{ $profile->user->name }}
        </h1>
        <small>registered {{ $profile->created_at->diffForHumans() }}</small> 
    </div>
</div>

<div class="card card-default">
    <div class="card-body">
        <form action="{{ route('profile.show', $profile->id) }}" method="PROFILE">
            @csrf
            @if($profile->image)
            <div class="form-group text-center my-5">
                <img src="{{url('/images')}}/{{ $profile->image->filename }}" alt=" ">
            </div>
            @else
            @endif
            

            <div class="form-group text-center my-5">
                <h3>{!!$profile->bio!!}</h3>
            </div>

        </form>
    </div>
</div>
@endsection