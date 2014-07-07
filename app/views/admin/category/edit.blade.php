@extends('templates.admin')




@section('content')

<br/>
	
	@if(!Auth::user()->admin == true)
		{{'Sorry. Only admins can edit categories'}}
	@else 

		{{ Form::open(array( 'url' =>"admin/category/$category->id", 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'MajorCategoryController@update', 'files' => true) ) }}
	 
	 
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="id" value="{{$category->id}}">
	 
			<div class="form-group">
				<label class="col-sm-2 control-label" for="title">Change Category Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" value="{{$category->oTitle}}">
					<p class="help-block">Example block-level help text here.</p>
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
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		
		</form>
	@endif




@stop