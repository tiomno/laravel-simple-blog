<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Simple blog system in Laravel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

<div class="collapse bg-inverse" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">Software developer, language agnostic and fond of web technologies and open source projects.</p>
            </div>
            <div class="col-sm-2 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                    <li><a href="http://www.linkedin.com/in/tiomno" class="text-white">Follow on LinkedIn</a></li>
                    <li><a href="https://github.com/tiomno" class="text-white">Check on GitHub</a></li>
                    <li><a href="mailto://tiomno@gmail.com" class="text-white">Email me</a></li>
                </ul>
            </div>
            <div class="col-sm-2 py-4">
                @if (Auth::check())
                    <h4 class="text-white">{{ Auth::user()->name }}</h4>
                    <ul class="list-unstyled">
                        <li><a href="/posts/create" class="text-white">Publish Post</a></li>
                        <li><a href="{{ route('logout') }}" class="text-white">Logout</a></li>
                    </ul>
                @else
                    <h4 class="text-white">Authors</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('login') }}" class="text-white">Login</a></li>
                        <li><a href="{{ route('register') }}" class="text-white">Register</a></li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>

@include ('layouts.nav')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Simple Blog</h1>
        <p class="lead text-muted">Laravel blog test by Israel :)</p>
    </div>
</section>

<div class="album text-muted">
    <div class="container">
        @yield ('content')
    </div>
</div>

@include ('layouts.footer')

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>
