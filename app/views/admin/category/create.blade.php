@extends('templates.admin')




@section('content')

<br/>


	@if(!Auth::user()->admin == true)
		{{'Sorry. Only admins can create new categories'}}
	@else 
		{{ Form::open(array( 'url' =>'admin/category', 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'MajorCategoryController@store', 'files' => true) ) }}
	 
	 
			<input type="hidden" name="method" value="post">
	 
			<div class="form-group">
				<label class="col-sm-2 control-label" for="title">Category Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" placeholder="ex. Marketing Tips">
					<p class="help-block">Enter your Category please.</p>
				</div>
			</div>
		
			<div class="form-group">
				<label class="col-sm-2 control-label" for="image">Upload a relevant Image</label>
				<div class="col-sm-10">
					<input type="file" name="image">
				
				</div>
			</div>
		
			<div class="form-gorup">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Create Category</button>
				</div>
			</div>
		
		</form>
	@endif





@stop