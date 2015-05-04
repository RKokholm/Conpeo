@extends('layout.main')

@section('title', 'Symfonious • Home')

@section('content')


	@if(Auth::check())

		<div class="content">
			
		</div>

	@else

		<div id="welcome-about">

		<div class="content">
		
			<h1>Welcome!</h1>

			@if($errors)

				@foreach($errors->all() as $error)

					<li>{{ $error }}</li>

				@endforeach

			@endif

		</div>	

	</div>

	@endif

@stop