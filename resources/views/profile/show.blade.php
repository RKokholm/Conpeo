@extends('layout.main')

@foreach($user as $key)

@section('title', 'Conpeo • '. $key->username)

@section('content')

	
	<div id="content">
	
			<img src="../images/banner.png" class="profile_banner">

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

			<div class="left-profile-nav">
				
			</div>

			<div class="profile-dashboard">

				<div class="post">
					jkhasbdjahsbdjahsbdjashd
				</div>


				<div class="post">
					jkhasbdjahsbdjahsbdjashdbjahsbd
				</div>


				<div class="post">
					jkhasbdjahsbdjahsbdjashdbjahsbd
				</div>

					{!! Form::open(['route' => 'profile_path']) !!}

						{!! Form::textarea('post-content', null, ['class' => 'new-post', 'placeholder' => 'What is on your mind?...', 'maxlength' => '180']) !!}

						{!! Form::submit('Share', ['class' => 'new-post-submit']) !!}

					{!! Form::close() !!}

			</div>

	</div>
	

@stop

@endforeach