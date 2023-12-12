@extends('home')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <form action="{{url('/user/create')}}" method="POST" style="background-color: #f5f5f5; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            @csrf
            <div class="form-group mt-2">
                <label for="full_name"> Full Name</label>
                <input type="text" name="full_name" class="form-control" required>
                @error('full_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="username"> Username</label>
                <input type="text" name="username" class="form-control" required>
                @error('username')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="email"> Email </label>
                <input type="text" name="email" class="form-control" required>
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary"> Add User</button>
            </div>
        </form>
    </div>
</div>

@endsection
