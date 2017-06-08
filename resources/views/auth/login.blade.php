@extends('layouts.master')

@section('content')
    <div class="row header">
        <h1>Login</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                @include ('layouts.errors')

                <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password"">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Remember Me</span>
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
