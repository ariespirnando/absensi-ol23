@extends('guest.layouts.app')
@section('contents')
<div class="card fat">
    <div class="card-body">
        <h4 class="card-title">Forgot Password</h4>
        <form action="{{ route('forgot.action')}} " method="POST" class="my-login-validation" novalidate="">
            @csrf
            <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                <div class="invalid-feedback">
                    Email is invalid
                </div>
                <div class="form-text text-muted">
                    By clicking "Reset Password" we will send a password reset link
                </div>
            </div>

            <div class="form-group m-0">
                <button type="submit" class="btn btn-primary btn-block">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
