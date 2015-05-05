@extends('layout.main')

@section('title', 'Symfonious • '. $user->username)

@section('content')

	
	<div class="content">
	
		@include('layout.partials.profile-leftarea')

		<div class="profile-dashboard">
			
			@include('layout.partials.profile-toprightarea')

			<div class="posts">
				
				<ul class="thoughts-profile">

					@foreach($user->posts as $post)

						<li>

							<div>

								<div class="post-top">
									
									<div class="profile-picture"></div>
									<a href="{{ URL::route('profile_path', $user->username) }}" class="post-author">{{ $user->first_name }} {{ $user->last_name }}</a>
									<span class="post-timestamp">{{ $post->created_at->diffForHumans() }}</span>

								</div>

								<div class="seperator"></div>
									
								{{ $post->content }}

							</div>

						</li>

					@endforeach

				</ul>

			<div class="thought-form">

				{!! Form::open(['route' => 'home_path']) !!}

					{!! Form::textarea('Thought_content', null, ['class' => 'new-thought', 'required', 'maxlength' => '500', 'placeholder' => 'What is on your mind?..']) !!}<br>

					{!! Form::submit('Share thought', ['class' => 'thought-btn']) !!}

				{!! Form::close() !!}

				@if($errors)

					@foreach($errors->all() as $error)

						<li>{{ $error }}</li>

					@endforeach

				@endif

			</div>

			</div>

		</div>

	</div>
	

@stop
