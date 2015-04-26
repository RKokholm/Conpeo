@extends('layout.main')

@foreach($user as $key)

@section('title', 'Conpeo • '. $key->username)

@section('content')

	
	<div id="content">
		<div class="profile_left">
			<div class="profile_image"></div>
		</div>

		<div class="profile_board">
			
		</div>
	</div>
	

@stop

@endforeach