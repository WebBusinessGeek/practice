@extends('templates.admin')






@section('content')



<table class="table table-striped table-hover table-bordered table-condensed">
	<thead>
		<tr>
		  <td><h4>Name</h4></td>
		  <td><h4>Email</h4></td> 
		  <td><h4>Edit</h4></td> 
		  <td><h4>Delete</h4></td> 
		   <td><h4>Priviledges</h4></td> 
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{ link_to("/admin/users/$user->id", $user->name) }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ link_to("admin/users/$user->id/edit", 'Edit Profile', $attributes = array('class' => 'btn btn-primary') ) }}</td>
			
			
				@if(Auth::user()->admin == true)
				<td>	
					{{ Form::open(array( 'url' =>"admin/users/$user->id",'role' => 'form', 'action' => 'UserController@destroy') ) }}
	 
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="id" value="{{$user->id}}">
	 
		
						<div class="form-gorup">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
		
					</form>
				</td>
				@else
				<td>{{'Only admins can delete users' }}</td>
				@endif
				
				@if($user->admin == true)
					<td>{{ 'Site Admin, Author' }}</td>
				@else
					<td>{{ 'Author' }}</td>
				@endif
			</tr>
		@endforeach
	</tbody>
</table>


<br/>

	{{ link_to('admin/users/create', 'Create new user', array('class' => 'btn btn-primary')) }}
















@stop