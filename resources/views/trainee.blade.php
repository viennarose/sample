@extends('home')

@section('content')

    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Trainee_ID</th>
                <th>Full Name</th>
                <th>Course Title</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($trainee as $trainee): ?>

                <tr>
                    <td>{{$trainee->id}}</td>
                    <td>{{$trainee->user->full_name}}</td>
                    <td>{{$trainee->course->title}}</td>
                    <td>{{$trainee->status}}</td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    @endsection
</body>
</html>
