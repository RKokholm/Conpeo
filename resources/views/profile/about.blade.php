@extends('layout.main')

@section('title', 'Symfonious • '. $user->username)

@section('content')

	
	<div class="content">
	
		@include('layout.partials.profile-leftarea')

		<div class="profile-dashboard">
			
			@include('layout.partials.profile-toprightarea')

			<div class="about-area">
				
				<h5 class="section-title">About</h5>

				{{ $user->profile->bio }}

			</div>

		</div>

	</div>
	

@stop
