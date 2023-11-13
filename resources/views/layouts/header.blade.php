<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISSUE TRACKER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark">

        <!-- Links -->
        <ul class="navbar-nav">
            @guest

            <li class="nav-item">
                <a class="nav-link text-light" href="/">Issue Tracker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('Login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('Register-user') }}">Register</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('signout') }}"><button class="btn btn-danger btn-sm float-end">Logout</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users') }}">All Users</a>
            </li>

            @endguest
        </ul>
    </nav>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @yield('content')

</body>

</html>