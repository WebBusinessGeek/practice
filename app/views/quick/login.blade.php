@extends('templates.admin')




@section('content')



<!--email password -->
	@if(Auth::check())
		{{ 'you are already logged in' }}
	@else


<br/>

	{{ Form::open(array( 'url' =>'admin/users/login', 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'UserController@login') ) }}
	 
	 
	 	<input type="hidden" name="method" value="post">
	 
        
        <div class="form-group">
            <label class="col-sm-2 control-label" for="email">Enter email:</label>
            <div class="col-sm-10">
            	<input type="email" class="form-control" name="email" placeholder="ex. email@wemail.com">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label" for="password">Enter Password:</label>
            <div class="col-sm-10">
            	<input type="password" class="form-control" name="password" placeholder="Ssshhhh!">
            </div>
        </div>
        
        
        <div class="form-gorup">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Log me in</button>
			</div>
		</div>
        
    </form>

	@endif




@stop