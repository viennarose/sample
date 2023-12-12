<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peertutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #e6e6e6;
    margin: 0;
    padding: 0;
}

.buttons {
    background-color: none;
    color: #000000;
    padding: 15px;
    text-align: center;
}

h1 {
    margin: 0;
    font-size: 36px;
    font-weight: bold;
}

ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: space-around;
    margin-top: 0;
    color: #000000;
    margin-left: auto;
    background-color: skyblue;
    text-align: center;
}

li {
    background-color: none;
    margin-right: 0;
    color: #000000;
    font-weight: bolder;
    font-size: 25px;
}

a {
    text-decoration: none;
    color: #000000;
    padding: 12px;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

a:hover, a.active {
    background-color: none;
}

.container {
    background-color: #ffffff;
    padding: 30px;
    margin: 2% 6%;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}

</style>
</head>
<body>
    <div class="buttons">

        <ul>
            <li><a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}" style="text-decoration: none; color: #000;">Home</a></li>

        <li><a href="{{ url('/user')}}" class="{{ Request::is('user') ? 'active' : '' }}"> Users</a></li>
        <li><a href="{{ url('/about')}}" class="{{ Request::is('about') ? 'active' : '' }}"> Trainors </a></li>
        <li><a href="{{ url('/course')}}" class="{{ Request::is('course') ? 'active' : '' }}"> Courses </a></li>
        <li><a href="{{ url('/trainee')}}" class="{{ Request::is('trainee') ? 'active' : '' }}"> Trainee </a></li>
    </ul>
    </div>
        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
