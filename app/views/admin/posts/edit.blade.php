@extends('templates.admin')




@section('content')



<!-- name email password admin-->


<br/>
	<?php $user_id = Auth::id();?>
	@if(Auth::user()->id != $post->user_id && Auth::user()->admin != true)
		{{'Sorry. Only admins can update other Author\'s posts.'}}
	@else
		{{ Form::open(array( 'url' =>"admin/posts/$post->id", 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'PostController@update') ) }}
	 
	 
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="id" value="{{$post->id}}">
			<input type="hidden" name="user_id" value="{{$user_id}}">
			
				<div class="form-group">
				<label class="col-sm-2 control-label" for="oTitle">Enter a Title: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" value="{{$post->oTitle}}" name="oTitle" placeholder="Why I like Sonic the hedgehog better than the food place.">
					<p class="help-block">Make it jazzy.</p>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label" for="subTitle">Enter a subtitle: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" value="{{$post->subTitle}}" name="subTitle" placeholder="A look at a fan of the classic Sega days">
					<p class="help-block">Give a descriptive second-liner</p>
				</div>
			</div>
	
			
			<div class="form-group">
				<label class="col-sm-2 control-label" for="minorCat_id">How should this post be categorized?</label>
				<div class="col-sm-10">
					<select name="minorCat_id" value="{{$post->minorCat_id}}"  class="form-control">
					
						@foreach($subCategories as $subCategory)
							<option value="{{$subCategory->id}}">{{ $subCategory->oTitle }}</option>
						@endforeach
						
					</select>
					<p class="help-block">Pick a category.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" value="{{$post->contentType}}"  for="contentType">What kind of content is this?</label>
				<div class="col-sm-10">
					<select name="contentType" class="form-control">
						<option value="What">Background of the subject</option>
						<option value="Application">Showing application of the subject</option>
						<option value="HowTo">How to do the subject</option>
						<option value="Inspiration">Inspiration or Case studies of the subject</option>
						<option value="Resources">Resources for accomplishing the subject</option>
					</select>
					<p class="help-block">Pick the one that is most related to this post.</p>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label text-danger" for="howToLifecycle">If this is a how to post, what lifecycle stage is it?</label>
				<div class="col-sm-10">
					<select name="howToLifecycle" value="{{$post->howToLifecylce}}"  class="form-control">
						<option value="None">None</option>
						<option value="Research">Research</option>
						<option value="Planning">Planning</option>
						<option value="Construction">Construction</option>
						<option value="Launch">Launch</option>
						<option value="Growth">Growth</option>
					</select>
					<p class="help-block text-danger bg-danger">Only select one if this is a How to post.</p>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label" for="body">Content</label>
				<div class="col-sm-10">
					<textarea rows="20" cols="60" placeholder="You know what to do...." name="body" class="form-control">
						{{$post->body}}
					</textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label" for="is_published">Ready to be published?</label>
				<div class="col-sm-10">
					<select name="is_published" value="{{$post->is_published}}" class="form-control">
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					<p class="help-block">Selecting yes will publish your post</p>
				</div>
			</div>
	
			
		
			<div class="form-gorup">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Update Post</button>
				</div>
			</div>
		
		</form>
	@endif





@stop