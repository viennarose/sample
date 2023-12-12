@extends('home')

@section('content')

<div class="row">
    <div class="col-md-5 mx-auto" style="border: 1px solid" style="border-radius:10px">
        <h1 style="color: black">CREATE TRAINORS</h1>

        <form action="{{url('trainor/create')}}" method="POST">
            @csrf
            <div class="form-group ">
                <label for="user_id">Select User</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option hidden='true'>Select User</option>
                    <option selected disabled>Select User</option>
                    @foreach ($users as $userId => $user)
                        <option value="{{$userId}}">{{$user}}</option>
                    @endforeach
                </select>

                @error('full_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="specialty">Specialty</label>
                <input type="text" name="specialty" class="form-control">
                @error('specialty')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">Add trainor</button>
            </div>
        </form>
    </div>
</div>



@endsection
