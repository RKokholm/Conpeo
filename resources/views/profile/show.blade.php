@extends('layout.main')

@foreach($user as $key)

@section('title', 'Conpeo • '. $key->username)

@section('content')

	
	<div id="content">
	
			<img src="../images/banner.png" class="profile_banner">

			<div class="user-area">
				
				<div class="user-area-divide"></div>
				<div class="user-area-divide"></div>

			</div>

			<div class="user-info">
				 
				<div class="user-info-divide border-right border-bottom">
					<i class="fa fa-table profile-icon"></i>Dashboard
				</div>
				<div class="user-info-divide border-bottom">
					<i class="fa fa-users profile-icon"></i>Friends
				</div>
				<div class="user-info-divide border-right">
					<i class="fa fa-picture-o profile-icon"></i>Images
				</div>
				<div class="user-info-divide noborder">
					<i class="fa fa-info profile-icon"></i>About
				</div>

			</div>


	</div>
	

@stop

@endforeach