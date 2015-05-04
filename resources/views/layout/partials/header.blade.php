<div id="main-header">
	
	<div id="header-content">


		<div class="nav-left">
		
			<a href="{{ URL::route('home_path') }}"><div id="brand"><img src="/images/note.png" alt="Symfonious" class="logo">Symfonious</div></a>
	
		</div>


		<div class="nav-middle">

			@if(Auth::check())

			<div class="header-search">{!! Form::text('search', null, ['class' => 'search-form', 'placeholder' => 'Search for people..']) !!}</div>

			@endif

		</div>

		<div class="nav-right">

			@if(Auth::check())

			<i class="fa fa-chevron-down"></i>		
	
			<span class="sign-in-link nav-right-link">{{ Auth::user()->first_name }}</span>

			<nav class="user-nav">

				<ul>
				
					<a href="{{ URL::route('profile_path', Auth::user()->username) }}"><li>Profile</li></a>				
					<a href="#"><li>My groups</li></a>
					<a href="#"><li>Support</li></a>
					<a href="#"><li>Settings</li></a>
					<a href="{{ URL::route('logout_path') }}"><li>Log out</li></a>

				</ul>
			
			</nav>


			@else

			<a href="{{ URL::route('login_path') }}" class="sign-in-link nav-right-link">Sign in</a>

			@endif
			
		</div>

	</div>

</div>

		<nav class="collapsed-nav">
			
			<ul>
				<li>{!! Form::text('search', null, ['class' => 'collapsed-search-form', 'placeholder' => 'Search for people..']) !!}</li>
				<a href="#"><li>Link</li></a>
				<a href="#"><li>Link</li></a>
				<a href="#"><li>Link</li></a>
				<a href="#"><li>Link</li></a>
			</ul>

		</nav>
