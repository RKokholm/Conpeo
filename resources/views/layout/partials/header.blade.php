<nav class="navbar navbar-default">

  <div class="container">

    <div class="row">
    	
		<div class="col-md-4">
			
			<a href="#" class="navbar-brand">Conpeo</a>

		</div>

		<div class="col-md-4">
			
			{!! Form::open(['class' => 'navbar-form navbar-left']) !!}

				<div class="input-group">
					
					<div class="col-md-12">
				
						{!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search..']) !!}
						<span class="input-group-btn">{!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}</span>
				
					</div>
				
				</div>

			{!! Form::close() !!}

		</div>

    </div>

  </div>

</nav>