@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-body">
        <form action="{{ route('profile.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea name="bio" id="bio" cols="5" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Profile Picture</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <div class="form-group">
                <button type="submit"class="btn btn-success">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
@endsection