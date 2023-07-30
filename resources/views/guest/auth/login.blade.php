@extends('guest.layouts.app')
@section('contents')
<div class="card fat">
    <div class="card-body">
        <h4 class="card-title">Login</h4>
        @include('component.alert')
        <form action="{{route('login.action')}}" method="POST" class="my-login-validation" novalidate="">
            @csrf
            <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email')}}" required autofocus>
                <div class="invalid-feedback">
                    Email is invalid
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password
                    <a href="{{route('forgot')}}" class="float-right">
                        Forgot Password?
                    </a>
                </label>
                <input id="password" type="password" class="form-control" name="password" required data-eye>
                <div class="invalid-feedback">
                    Password is required
                </div>
            </div>

            <div class="form-group">
                <div class="custom-checkbox custom-control">
                    <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                    <label for="remember" class="custom-control-label">Remember Me</label>
                </div>
            </div>

            <div class="form-group m-0">
                <button type="submit" class="btn btn-primary btn-block">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
