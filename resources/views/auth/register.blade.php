@extends('layout.auth')

@section('title', 'Conpeo • Register')

@section('content')

	<div id="slick-top"></div>

	<div id="register-wrapper">

		<a href="{{ URL::route('home_path') }}"><i class="fa fa-chevron-left"></i></a>
		
		<span class="header1">Register</span>

		{!! Form::open(['route' => 'register_path']) !!}


			<div class="form-group">
			{!! Form::label('first_name', 'First name', ['class' => 'form-label']) !!}<br>
			{!! Form::text('first_name', null, ['class' => 'form-input', 'required', 'placeholder' => 'Please enter your first name...']) !!}<br>
			</div>
	
			<div class="form-group">
			{!! Form::label('last_name', 'Last name', ['class' => 'form-label']) !!}<br>
			{!! Form::text('last_name', null, ['class' => 'form-input', 'required', 'placeholder' => 'Please enter your last name...']) !!}<br>			
			</div>

			<div class="form-group">
			{!! Form::label('username', 'Username', ['class' => 'form-label']) !!}<br>
			{!! Form::text('username', null, ['class' => 'form-input', 'required', 'placeholder' => 'Please enter your username...']) !!}<br>
			</div>

			<div class="form-group">
			{!! Form::label('email', 'Email', ['class' => 'form-label']) !!}<br>
			{!! Form::email('email', null, ['class' => 'form-input', 'required', 'placeholder' => 'Please enter your email...']) !!}<br>
			</div>

			<div class="form-group">
			{!! Form::label('password', 'Password', ['class' => 'form-label']) !!}<br>
			{!! Form::password('password', ['class' => 'form-input', 'required', 'placeholder' => 'Please enter your password...']) !!}<br>
			</div>

			<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirm password', ['class' => 'form-label']) !!}<br>
			{!! Form::password('password_confirmation', ['class' => 'form-input', 'required', 'placeholder' => 'Please confirm your password...']) !!}<br>
			</div>

			{!! Form::submit('Create Account', ['class' => 'form-btn']) !!}

		{!! Form::close() !!}

		@if($errors)

			@foreach($errors->all() as $error)

				{{ $error }}

			@endforeach

		@endif

		<a href="{{ URL::route('login_path') }}" class="return-link">Return to login</a>

	</div>

@stop