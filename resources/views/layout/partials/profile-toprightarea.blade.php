
			<div class="banner">

				@if(Auth::check())

					@if(Auth::user()->username = $user->username)
					
						<div class="edit-profile-btn"><i class="fa fa-cog"></i>Edit profile</div>

					@endif

				@endif

			</div>
			
			<div class="stats">

				
				
				<ul>
					
					<li>Friends<br> 
						<span class="number">122</span>
					</li>

					<li>Images<br>
						<span class="number">56</span>
					</li>

					<li>Thoughts<br>
						<span class="number">{{ $user->posts->count() }}</span>
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

					<span class="short-about">{{ $user->profile->short }}</span>

				</div>

			</div>