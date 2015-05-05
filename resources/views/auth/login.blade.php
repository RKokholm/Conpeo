@extends('layout.auth')

@section('title', 'Symfonious • Login')

@section('content')

	<div id="slick-top"></div>

	<div id="register-wrapper">

		<a href="{{ URL::route('home_path') }}"><i class="fa fa-chevron-left"></i></a>
		
		<span class="header1">Log in</span>

		{!! Form::open(['route' => 'login_path']) !!}

			<div class="form-group">
			{!! Form::label('email', 'Email', ['class' => 'form-label']) !!}<br>
			{!! Form::email('email', null, ['class' => 'form-input', 'required', 'placeholder' => 'Please enter your email...']) !!}<br>
			</div>

			<div class="form-group">
			{!! Form::label('password', 'Password', ['class' => 'form-label']) !!}<br>
			{!! Form::password('password', ['class' => 'form-input', 'required', 'placeholder' => 'Please enter your password...']) !!}<br>
			</div>

			{!! Form::submit('Log in', ['class' => 'form-btn']) !!}

		{!! Form::close() !!}

		@if($errors)
	
			@foreach($errors->all() as $error)

				{{ $error }}

			@endforeach

		@endif

		<span class="links-wrapper">

			<span class="auth-links">Don't have an account?</span><a href="{{ URL::route('register_path') }}">Sign up here!</a>

		</span>

	</div>

@stop