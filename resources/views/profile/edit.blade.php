@extends('layout.main')

@section('title', 'Symfonious • '. $user->username)

@section('content')

	
	<div class="content">
	
		@include('layout.partials.profile-leftarea')

		<div class="profile-dashboard">
			
			@include('layout.partials.profile-toprightarea')

			<div class="editarea">
				
				{!! Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile_update_path', $user->username]]) !!}

					{!! Form::textarea('bio', null, ['class' => 'textfield', 'required', 'placeholder' => 'Tell the world about yourself..']) !!}<br>
					{!! Form::text('short', null, ['class' => 'textfield', 'required', 'placeholder' => 'Write a short message to display on your profile..']) !!}<br>
					{!! Form::text('location', null, ['class' => 'textfield', 'required']) !!}<br>
					{!! Form::selectYear('birth_year', 2015, 1950, ['class' => 'years', 'required']) !!}<br>
					{!! Form::text('youtube', null, ['class' => 'textfield', 'required']) !!}<br>
					{!! Form::text('twitter', null, ['class' => 'textfield', 'required']) !!}<br>
					{!! Form::text('facebook', null, ['class' => 'textfield', 'required']) !!}<br>
					{!! Form::submit('Save', ['class' => 'save-btn']) !!}

				{!! Form::close() !!}

			</div>

		</div>

	</div>
	

@stop
