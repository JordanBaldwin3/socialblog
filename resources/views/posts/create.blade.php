@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-body">
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="5" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image Upload</label>
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