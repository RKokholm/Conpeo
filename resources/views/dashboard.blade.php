@extends('layout.main')

@section('title', 'Symfonious • Home')

@section('content')


	@if(Auth::check())

		<div class="content">
			
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

			<div class="wrapper">

				<ul class="thoughts">

					@foreach($user->posts as $post)

						<li>

							<div>

								<div class="post-top">
									
									<div class="profile-picture"></div>
									<a href="{{ URL::route('profile_path', $user->username) }}" class="post-author">{{ $user->first_name }} {{ $user->last_name }}</a>
									<span class="post-timestamp">{{ $post->created_at->diffForHumans() }}</span>

								</div>

								<div class="seperator"></div>
									
								<span class="thought-content">{!! nl2br(e($post->content)) !!}</span>

							</div>

						</li>

					@endforeach

				</ul>

			</div>
			
		</div>

	@else

		<div id="welcome-about">

		<div class="content">
		
			<h1>Welcome!</h1>

		</div>	

	</div>

	@endif

@stop