@extends('templates.admin')






@section('content')

	{{ $post->oTitle }}


	{{ link_to("admin/posts/$post->id/edit", 'Edit this post') }}

	
	{{ Form::open(array( 'url' =>"admin/posts/$post->id",'role' => 'form', 'action' => 'PostController@destroy') ) }}
	 
	 	<input type="hidden" name="_method" value="DELETE">
	 	<input type="hidden" name="id" value="{{$post->id}}">
	 
        
        <div class="form-gorup">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</div>
        
    </form>



@stop