@extends('layouts.app')
@section('title', 'Administrador')
@section('section', 'Loguin administrador in voluptate')

@section('content')

<div id="login">
  <div class="row align-items-center">
      <div class="col-sm-12 col-md-8 offset-md-2 col-lg-5 offset-lg-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ __('E-Mail Address') }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ __('Password') }}">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                 </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
                </div>
                <div class="row" id="back">
                    <div class="col-sm-12 col-md-3 offset-md-9 col-lg-4 offset-lg-8">
                    <button type="button" class="btn btn-danger btn-block">
                        <a href="/register">
                            Registro
                        </a>
                    </button>
                    </div>
                </div>                
            </form>
        </div>
    </div>
</div>
@endsection
