@extends('layout.main')

@foreach($user as $key)

@section('title', 'Conpeo • '. $key->username)

@section('content')

	
	<div id="content">
	
			<div class="profile_banner"></div>

			<div class="user-info">
				 


			</div>

			<div class="left-profile-nav">
				
			</div>

			<div class="profile-dashboard">

			</div>

	</div>
	

@stop

@endforeach