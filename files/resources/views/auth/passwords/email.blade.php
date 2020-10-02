@extends('layouts.auth-layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="/images/icon/hf.png" alt="HF" width="300px" height="200px">
                            </a>
                        </div>
                        <div class="login-form">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email"  class="au-input au-input--full form-control @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="password-reset">{{ __('Send Password Reset Link') }}</button>
                            </form>
                            <div class="register-link @if (Route::has('register')) d-flex justify-content-between @endif">
                                <p>  
                                    Still remember it?
                                    <a href="{{ route('login') }}">Sign In</a>   
                                </p>
                                @if (Route::has('register'))
                                <p>
                                    No hope?
                                    <a href="{{ route('register') }}">Register</a>
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection