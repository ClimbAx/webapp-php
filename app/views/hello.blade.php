@extends('layouts.default')
@section('title') 
	Home 
@stop
@section('content')
	{{link_to_route('login', 'Login', $attributes = array(), $secure = null);}}
	<a href="{{ URL::to('logout') }}">Logout</a>
	<div class="row">
		<div class="col-md-5 col-md-offset-5">			
			<h3>Coming Soon</h3>		
		</div>
	</div>

@stop
	

	

