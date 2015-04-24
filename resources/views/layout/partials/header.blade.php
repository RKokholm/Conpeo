<div id="main-header">
	
	<div id="header-content">


		<div class="nav-left">
		
			<a href="{{ URL::route('home_path') }}"><div id="brand"></div></a>
	
		</div>


		<div class="nav-middle">

			@if(Auth::check())

			<div class="header-search">{!! Form::text('search', null, ['class' => 'search-form', 'placeholder' => 'Search for people..']) !!}</div>

			@endif

		</div>

		<div class="nav-right">

			@if(Auth::check())

			<a href="#" class="sign-in-link">Username</a>

			@else

			<a href="{{ URL::route('login_path') }}" class="sign-in-link">Sign in</a>

			@endif
			 
			
		</div>


	</div>

</div>