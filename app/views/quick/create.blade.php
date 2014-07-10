@extends('templates.admin')




@section('content')



<!-- name email password admin-->



<br/>

	
		
		{{ Form::open(array( 'url' =>'quickcreate', 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'QuickUserController@store') ) }}
 
 
			<input type="hidden" name="method" value="post">
 
			<div class="form-group">
				<label class="col-sm-2 control-label" for="name">Enter name: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" placeholder="ex. Sonic the hedgehog">
					<p class="help-block">Enter a name of the new user.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="email">Enter email:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="ex. blue_spikeyDude@spinball.com">
					<p class="help-block">Enter their email address.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="password">Enter their new Password:</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" placeholder="Ssshhhh!">
					<p class="help-block">Enter a password.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="password_confirmation">Confirm it:</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password_confirmation" placeholder="SSSHHHHHH!">
					<p class="help-block">Make sure you entered it correctly.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="admin">Will they be an admin?</label>
				<div class="col-sm-10">
					<select name="admin" class="form-control">
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					<p class="help-block">Enter their email.</p>
				</div>
			</div>
	
			<div class="form-gorup">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Create User</button>
				</div>
			</div>
	
		</form>

	@endif



@stop