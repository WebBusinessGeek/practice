@extends('templates.admin')




@section('content')

<br/>

	@if(!Auth::user()->admin == true)
		{{'Sorry. Only admins can create a Subcategory'}}
	@else 
		{{ Form::open(array( 'url' =>'admin/subcategory', 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'MinorCategoryController@store', 'files' => true) ) }}
	 
	 
			<input type="hidden" name="method" value="post">
	 
			<div class="form-group">
				<label class="col-sm-2 control-label" for="name">Subcategory Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" placeholder="ex. Marketing Tips">
				</div>
			</div>
		
			 <div class="form-group">
				 <label class="col-sm-2 control-label" for="major_id">Select a Parent Category</label>
				 <div class="col-sm-10">
					<select class="form-control" name="major_id">
					@foreach($categories as $category)	
						<option value="{{$category->id}}" >{{$category->oTitle}}</option>
					  @endforeach
					</select>
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
					<button type="submit" class="btn btn-default">Create subcategory</button>
				</div>
			</div>
		
		</form>
	@endif





@stop