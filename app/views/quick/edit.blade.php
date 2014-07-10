@extends('templates.admin')




@section('content')



<!-- name email password admin-->


<br/>

		{{ Form::open(array( 'url' =>"admin/users/$user->id", 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'UserController@update', 'files' => true) ) }}
	 
	 
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="id" value="{{$user->id}}">

			<div class="form-group">
				<label class="col-sm-2 control-label" for="name">Enter name: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="ex. Sonic the hedgehog">
					<p class="help-block">Update the Author's Name</p>
				</div>
			</div>
		
			<div class="form-group">
				<label class="col-sm-2 control-label" for="email">Enter email:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="ex. blue_spikeyDude@spinball.com">
					<p class="help-block">Update the email address.</p>
				</div>
			</div>
		
		
			<div class="form-group">
				<label class="col-sm-2 control-label" for="admin">Admin Status?</label>
				<div class="col-sm-10">
					<select name="admin" class="form-control">
						<option value="1">True</option>
						<option value="0">False</option>
					</select>
					<p class="help-block">Update the admin status.</p>
				</div>
			</div>
		
			<div class="form-group">
				<label class="col-sm-2 control-label" for="password">Enter your Password to make changes:</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password">
					<p class="help-block">Enter a password.</p>
				</div>
			</div>
		
		
		
			<div class="form-gorup">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Update User</button>
				</div>
			</div>
		
		</form>
	@endif





@stop