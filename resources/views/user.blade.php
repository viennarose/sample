@extends('home')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif

<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{ url('/user/create') }}" class="btn btn-primary me-md-2" type="button">
        Add new user
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Full Name</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($user as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->full_name }}</td>
            <td>
                <button><a href="{{ url('/user/edit/' . $user->id) }}">Edit</a></button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserModal{{ $user->id }}">
                    Delete
                </button>
            </td>
        </tr>

        <!-- Modal -->
        <div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="deleteUserModalLabel{{ $user->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteUserModalLabel{{ $user->id }}">Delete User - {{ $user->full_name }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('/user/' . $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class='modal-body'>
                            Are you sure you want to delete this user?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        @endforeach
    </tbody>
</table>
@endsection
