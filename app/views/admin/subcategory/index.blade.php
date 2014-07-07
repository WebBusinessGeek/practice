@extends('templates.admin')






@section('content')


<table class="table table-striped table-hover table-bordered table-condensed">
	<thead>
		<tr>
		  <td><h4>Subcategory</h4></td>
		  <td><h4>ImageName</h4></td> 
		  <td><h4>Edit</h4></td> 
		  <td><h4>Delete</h4></td> 
		  <td><h4>Parent Category</h4></td>
		</tr>
	</thead>
	<tbody>
		@foreach($subCategories as $cat)
			<tr>
				<td>{{ link_to("/admin/subcategory/$cat->id", $cat->oTitle) }}</td>
				<td>{{ $cat->imageName }}</td>
				<td>{{ link_to("admin/subcategory/$cat->id/edit", 'Edit Subcategory', $attributes = array('class' => 'btn btn-primary') ) }}</td>
				@if(Auth::user()->admin == true)
				<td>	
					{{ Form::open(array( 'url' =>"admin/subcategory/$cat->id",'role' => 'form', 'action' => 'MinorCategoryController@destroy') ) }}
	 
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
				<td>{{ 'Only admins can delete Subcategories' }}</td>
				@endif
				<td>{{ $cat->MajorCategory->oTitle }}</td>
			</tr>
	@endforeach
	</tbody>
</table>


<br/>

{{ link_to('admin/subcategory/create', 'Create new Subcategory', array('class' => 'btn btn-primary')) }}





















@stop