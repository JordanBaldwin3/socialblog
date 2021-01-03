@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="form-group text-center my-5">
        <h1>  Admin Control Panel </h1>
    </div>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id}}</th>
            <td>
            @if($user->isAdmin())
                {{ $user->name}}*
            @else
                {{ $user->name}}
            @endif
            </td>
            <td>{{ $user->email}}</td>
            <td>
                <form action="{{ route('admin.user', $user->id) }}" method="POST">
                @csrf
                <button onclick="return confirm('Give user admin?')" class="btn btn-primary">
                    Promote
                </button>
                </form>

                <form action="{{ route('demote.user', $user->id) }}" method="POST">
                @csrf
                <button onclick="return confirm('Demote admin?')" class="btn btn-primary">
                    Demote
                </button>
                </form>

                <form action="{{ route('delete.user', $user->id) }}" method="POST">
                @csrf
                <button onclick="return confirm('Delete user?')" class="btn btn-danger">
                    Delete
                </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection