@extends('templates.admin')




@section('content')


<!-- name email password admin-->


<br/>

	<?php $id = Auth::id(); ?>

		<h3>{{ 'You are creating a new post as '. link_to("/admin/users/$id", Auth::user()->name) }}</h3>
		<br/>
	
		{{ Form::open(array( 'url' =>'admin/posts', 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'PostController@store') ) }}
 
 
 	<!-- xtitle, oTitle,
 	
 	
 	xbody, 
 	
 	xcontentType ('What', 'Application', 'HowTo', 'Inspiration', 'Resources'),
 	
 	xhowToLifecycle ('Research', 'Planning', 'Construction', 'Launch', 'Growth', 'None'), 
 	
 	xuser_id, 
 	
 	xminorCat_id, 
 	
 	xis_published -->
 	
			<input type="hidden" name="method" value="post">
			<input type="hidden" name="user_id" value="{{$id}}">
 
			<div class="form-group">
				<label class="col-sm-2 control-label" for="oTitle">Enter a Title: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="oTitle" placeholder="Why I like Sonic the hedgehog better than the food place.">
					<p class="help-block">Make it jazzy.</p>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label" for="subTitle">Enter a subtitle: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="subTitle" placeholder="A look at a fan of the classic Sega days">
					<p class="help-block">Give a descriptive second-liner</p>
				</div>
			</div>
	
			
			<div class="form-group">
				<label class="col-sm-2 control-label" for="minorCat_id">How should this post be categorized?</label>
				<div class="col-sm-10">
					<select name="minorCat_id" class="form-control">
					
						@foreach($subCategories as $subCategory)
							<option value="{{$subCategory->id}}">{{ $subCategory->oTitle }}</option>
						@endforeach
						
					</select>
					<p class="help-block">Pick a category.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="contentType">What kind of content is this?</label>
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
					<select name="howToLifecycle" class="form-control">
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
						
					</textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label" for="is_published">Ready to be published?</label>
				<div class="col-sm-10">
					<select name="is_published" class="form-control">
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					<p class="help-block">Selecting yes will publish your post</p>
				</div>
			</div>
	
			<div class="form-gorup">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Add Post</button>
				</div>
			</div>
	
		</form>




@stop