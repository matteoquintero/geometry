@extends('layouts.app')
@section('title', 'Registro Administrador')
@section('section', 'Registro administrador')

@section('content')

<div id="login">
  <div class="row align-items-center">
      <div class="col-sm-12 col-md-8 offset-md-2 col-lg-5 offset-lg-6">
	        <form method="POST" action="{{ route('register') }}">
	            @csrf

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
	                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="{{ __('Name') }}">
	                    @if ($errors->has('name'))
	                        <span class="invalid-feedback">
	                            <strong>{{ $errors->first('name') }}</strong>
	                        </span>
	                    @endif
	                </div>
	            </div>
	            </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
	                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="{{ __('E-Mail Address') }}">

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
	                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
	                </div>
	            </div>
	            </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
	                    <button type="submit" class="btn btn-danger btn-block">
	                        {{ __('REGISTRARSE COMO ADMINISTRADOR') }}
	                    </button>
	                </div>
	            </div>
	        </form>
      </div>
  </div>
</div>
@endsection
