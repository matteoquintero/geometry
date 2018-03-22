@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           {{ __('Register') }}
	        <form method="POST" action="{{ route('register') }}">
	            @csrf

	            <div class="form-group row">
	                <div class="col-md-6">
	                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="{{ __('Name') }}">
	                    @if ($errors->has('name'))
	                        <span class="invalid-feedback">
	                            <strong>{{ $errors->first('name') }}</strong>
	                        </span>
	                    @endif
	                </div>
	            </div>

	            <div class="form-group row">
	                <div class="col-md-6">
	                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="{{ __('E-Mail Address') }}">

	                    @if ($errors->has('email'))
	                        <span class="invalid-feedback">
	                            <strong>{{ $errors->first('email') }}</strong>
	                        </span>
	                    @endif
	                </div>
	            </div>

	            <div class="form-group row">
	                <div class="col-md-6">
	                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ __('Password') }}">

	                    @if ($errors->has('password'))
	                        <span class="invalid-feedback">
	                            <strong>{{ $errors->first('password') }}</strong>
	                        </span>
	                    @endif
	                </div>
	            </div>

	            <div class="form-group row">
	                <div class="col-md-6">
	                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
	                </div>
	            </div>

	            <div class="form-group row mb-0">
	                <div class="col-md-6 offset-md-4">
	                    <button type="submit" class="btn btn-danger btn-block">
	                        {{ __('Register') }}
	                    </button>
	                </div>
	            </div>
	        </form>
        </div>
    </div>
</div>
@endsection
