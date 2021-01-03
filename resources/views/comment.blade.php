@extends('layouts.app')

@section('content')
<h1 class="text-center my-5"> Edit Comment </h1>

<div class="card card-default">
    <div class="card-body">
        <form action="{{ route('comment.update', $comment->id) }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="5" rows="5" class="form-control">{{ $comment->body }}</textarea>
            </div>

            <div class="form-group">
                <button type="submit"class="btn btn-outline-success">
                    Update Comment
                </button>
            </div>
        </form>
    </div>
</div>
@endsection