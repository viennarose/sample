@extends('home')

@section('content')

    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Course_ID</th>
                <th>Trainor Name</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($course as $course): ?>

                <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->trainor->user->full_name}}</td>
                    <td>{{$course->title}}</td>
                    <td>{{$course->description}}</td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    @endsection
</body>
</html>
