@extends('templates.admin')






@section('content')

	{{ $user->name }}


	{{ link_to("admin/users/$user->id/edit", 'Edit Author') }}

	
	{{ Form::open(array( 'url' =>"admin/users/$user->id",'role' => 'form', 'action' => 'UserController@destroy') ) }}
	 
	 	<input type="hidden" name="_method" value="DELETE">
	 	<input type="hidden" name="id" value="{{$user->id}}">
	 
        
        <div class="form-gorup">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-danger">Delete this Author</button>
			</div>
		</div>
        
    </form>



@stop