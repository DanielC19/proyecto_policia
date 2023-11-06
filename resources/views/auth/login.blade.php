@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 center">
            <form method="POST" id="loginPage" action="{{ route('login') }}">
                @csrf
                <div class="login-container">
                    <div class="oreja">
                        <img width="50px" src="{{ asset('storage/img/imgtomb.png') }}" alt="a">
                    </div>
                    <div class="pokemon">
                        <div class="top">
                            <div class="middle"></div>
                        </div>
                        <div class="square square1"></div>
                        <div class="square square2"></div>
                        <div class="square square3"></div>
                        <div class="eye eye-left">
                            <div class="pupil"></div>
                        </div>
                        <div class="black"></div>
                        <div class="blackright"></div>
                        <div class="sleep-eye sleep-eye-left"></div>
                        <div class="sleep-eye sleep-eye-right"></div>
                        <div class="eye eye-right">
                            <div class="pupil2"></div>
                        </div>
                        <div class="nose"></div>
                        <div class="mouth">
                            <div class="tongue"></div>
                        </div>
                    </div>
                    <p class='em-text'>  C O R R E O</p>
                    <input type="text" name="email" class="email input @error('email') is-invalid @enderror" placeholder="ejemplo@gmail.com" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <p class='pass-text'>  C O N T R A S E Ñ A</p>
                    <div class="show-password">
                        <input id="show_password" type="checkbox">
                        <p>V E R</p>
                    </div>
                    <input type="password" name="password" class="pass input @error('password') is-invalid @enderror" id="pass" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="center">
                        <button type="submit" class="button">
                            I N G R E S A R
                        </button>
                        @if (Route::has('password.request'))
                            <div>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
