@extends('templates.admin')




@section('content')

<br/>


	@if(!Auth::user()->admin == true)
		{{'Sorry. Only admins can edit Subcategories'}}
	@else 

		{{ Form::open(array( 'url' =>"admin/subcategory/$subCategory->id", 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'MinorCategoryController@update', 'files' => true) ) }}
	 
	 
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="id" value="{{$subCategory->id}}">
	 
			<div class="form-group">
				<label class="col-sm-2 control-label" for="title">Change Subcategory Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" value="{{$subCategory->oTitle}}">
				</div>
			</div>
		
		
			<div class="form-group">
				 <label class="col-sm-2 control-label" for="major_id">Change the parent category:</label>
				 <div class="col-sm-10">
					<select class="form-control" name="major_id">
						<option value="{{$subCategory->major_id}}">{{ MajorCategory::where('id', '=', $subCategory->major_id)->first()->oTitle}}</option>
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
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		
		</form>
	@endif




@stop