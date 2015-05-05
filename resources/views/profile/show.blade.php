@extends('layout.main')

@section('title', 'Symfonious • '. $user->username)

@section('content')

	
	<div class="content">
	
		<div class="profile-left">
			
			<div class="field"></div>
			<div class="field"></div>
			<div class="field"></div>

		</div>

		<div class="profile-dashboard">

			<div class="banner"></div>
			<div class="stats">

				
				
				<ul>
					
					<li>Friends<br> 
						<span class="number">122</span>
					</li>

					<li>Images<br>
						<span class="number">56</span>
					</li>

					<li>Thoughts<br>
						<span class="number">4541</span>
					</li>

					<li>Unknown<br>
						<span class="number">654</span>
					</li>

				</ul>

				<div class="top">
					
					<div class="profile-picture"></div>

					<div class="profile-name">
						
						{{ $user->first_name }} {{ $user->last_name }}<br>

						<span>{{ $user->username }}</span>

					</div>

					<span class="short-about">{{ $user->profile->short_about }}</span>

				</div>

			</div>

			<div class="posts">
				
				

			</div>

		</div>

	</div>
	

@stop
