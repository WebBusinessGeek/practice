@extends('templates.admin')






@section('content')

	{{ $subCategory->oTitle }}


	{{ link_to("admin/subcategory/$subCategory->id/edit", 'Edit Subcategory') }}

	
	{{ Form::open(array( 'url' =>"admin/subcategory/$subCategory->id",'role' => 'form', 'action' => 'MinorCategoryController@destroy') ) }}
	 
	 	<input type="hidden" name="_method" value="DELETE">
	 	<input type="hidden" name="id" value="{{$subCategory->id}}">
	 
        
        <div class="form-gorup">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</div>
        
    </form>



@stop