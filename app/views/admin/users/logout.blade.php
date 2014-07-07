@extends('templates.admin')






@section('content')

	@if(Auth::check())
		<?php $id = Auth::id() ?>
		<h2>Are you sure you want to logout of my awesome application?</h2>
	
		<br/>
		{{ Form::open(array( 'url' =>'admin/users/logout', 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'UserController@logout') ) }}
	 
	 
			<input type="hidden" name="method" value="post">
	 
			<input type="hidden" name="id" value="{{$id}}">
		
			<div class="form-gorup">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-danger">Log me out man</button>
				</div>
			</div>
		
		</form>
	@else
		<h1>You arent logged in. How did you get here?</h1>
		
		<h4>Why dont you{{ link_to('admin/users/login', 'log in now.') }}</h4>
		
	@endif


@stop