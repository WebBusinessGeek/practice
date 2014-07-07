@extends('templates.admin')






@section('content')

<table class="table table-striped table-hover table-bordered table-condensed">
	<thead>
		<tr>
		  <td><h4>Post Title</h4></td>
		  <td><h4>Classification</h4></td> 
		  <td><h4>Edit</h4></td> 
		  <td><h4>Delete</h4></td> 
		  <td><h4>Author</h4></td>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
			<tr>
				<td>{{ link_to("/admin/posts/$post->id", $post->oTitle) }}</td>
				@if($post->MinorCategory)
					<td>{{ $post->MinorCategory->oTitle}}</td>
				@else
					<td>{{ 'No classification '. link_to("admin/posts/$post->id/edit", 'please add one now') }}</td>
				@endif
				<td>{{ link_to("admin/posts/$post->id/edit", 'Edit Post', $attributes = array('class' => 'btn btn-primary') ) }}</td>
				
				@if(Auth::user()->admin == true || $post->user_id == Auth::id() )
					<td>	
						{{ Form::open(array( 'url' =>"admin/posts/$post->id",'role' => 'form', 'action' => 'PostController@destroy') ) }}
	 
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="id" value="{{$post->id}}">
	 
		
							<div class="form-gorup">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
		
						</form>
					</td>
				@else
					<td>{{ 'Cannot delete other author\'s posts' }}</td>
				@endif
				
				@if($post->user)
					<td>{{ $post->user->name }}</td>
				@else
					<td>{{ 'No author '. link_to("admin/posts/$post->id/edit", 'please add one now') }}</td>
				@endif
			</tr>
	@endforeach
	</tbody>
</table>


<br/>

{{ link_to('admin/posts/create', 'Create a new Post', array('class' => 'btn btn-primary')) }}

















@stop