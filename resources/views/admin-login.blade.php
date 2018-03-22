@extends('layouts.app')

@section('title', 'Ut enim')
@section('section', 'Ut enim ad minim veniam')

@section('header')
    @parent

@endsection

@section('content')
	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		@if (Session::get('loginError'))
		    @component('alert')
		    @slot('title')
		        Login
		    @endslot
		    {{ Session::get('loginError') }}
		    @endcomponent  
		@endif

		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}

@endsection