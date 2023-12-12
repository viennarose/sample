@extends('home')

@section('content')
@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('/trainor/create')}}" class="btn btn-primary me-md-2" type="button">
        Add new trainor
    </button>
    </a>
  </div>

    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Trainor_ID</th>
                <th>Full Name</th>
                <th>Specialty</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($trainor as $trainor): ?>

                <tr>
                    <td>{{$trainor->id}}</td>
                    <td>{{$trainor->user->full_name}}</td>
                    <td>{{$trainor->specialty}}</td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    @endsection
</body>
</html>
