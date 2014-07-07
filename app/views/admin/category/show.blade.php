@extends('templates.admin')






@section('content')

	{{ $category->oTitle }}


	{{ link_to("admin/category/$category->id/edit", 'Edit Category') }}

	@if(Auth::user()->admin == true)
		{{ Form::open(array( 'url' =>"admin/category/$category->id",'role' => 'form', 'action' => 'MajorCategoryController@destroy') ) }}
	 
			<input type="hidden" name="_method" value="DELETE">
			<input type="hidden" name="id" value="{{$category->id}}">
	 
		
			<div class="form-gorup">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-danger">Delete</button>
				</div>
			</div>
		
		</form>
	@endif



@stop