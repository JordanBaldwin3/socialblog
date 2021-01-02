@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-body">
        <form action="{{ route('profile.show', Auth::user()->id) }}" method="PROFILE">
            @csrf
            <div class="form-group text-center my-5">
                <img src="{{url('/images')}}/{{ $profile->image->filename }}">
            </div>
            <div class="form-group">
                <h1> {{ Auth::user()->name }} </h1>
            </div>

            <div class="form-group">
                <h3>{!!$profile->bio!!}</h3>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
        </form>
    </div>
</div>
@endsection