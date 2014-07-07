@extends('templates.admin')






@section('content')


<table class="table table-striped table-hover table-bordered table-condensed">
	<thead>
		<tr>
		  <td><h4>Category</h4></td>
		  <td><h4>ImageName</h4></td> 
		  <td><h4>Edit</h4></td> 
		  <td><h4>Delete</h4></td> 
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $cat)
		<tr>
			<td>{{ link_to("/admin/category/$cat->id", $cat->oTitle) }}</td>
			<td>{{ $cat->imageName }}</td>
			<td>{{ link_to("admin/category/$cat->id/edit", 'Edit Category', $attributes = array('class' => 'btn btn-primary') ) }}</td>
			
			
			@if(Auth::user()->admin == true)
				<td>	
					{{ Form::open(array( 'url' =>"admin/category/$cat->id",'role' => 'form', 'action' => 'MajorCategoryController@destroy') ) }}
	 
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="id" value="{{$cat->id}}">
	 
		
						<div class="form-gorup">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
		
					</form>
			
				</td>
			@else
				<td>{{ 'Only admins can delete categories' }}</td>
			@endif
			
		</tr>
		@endforeach
	</tbody>
</table>


<br/>

	{{ link_to('admin/category/create', 'Create new Category', array('class' => 'btn btn-primary')) }}





@stop