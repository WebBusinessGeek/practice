<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		return View::make('admin/posts/index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$subCategories = MinorCategory::all();
		return View::make('admin/posts/create')->with('subCategories', $subCategories);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
		
		
		
		*/
	 
	public function store()
	{
		
	
		//run validation on the form
		$v = Validator::make(Input::all(), Post::$createFormRules);
		
		//if validation fails redirect back with error message
		if($v->fails()):
			$badMessage = $v->messages();
			return Redirect::back()->withInput()->with('badMessage', $badMessage);
		else:
			//create new resource with inputted information, make sure title is slugged.
			$newPost = new Post;
			
				$newPost->oTitle = Input::get('oTitle');
			
				$newPost->title = Str::slug(Input::get('oTitle'));
				
				$newPost->body = Input::get('body');
				
				$newPost->contentType = Input::get('contentType');
				
				$newPost->howToLifecycle = Input::get('howToLifecycle');
				
				$newPost->user_id = Input::get('user_id');
				
				$newPost->subTitle = Input::get('subTitle');
				
				$newPost->minorCat_id = Input::get('minorCat_id');
				
				$newPost->is_published = Input::get('is_published');
			
			//check if post was saved successfully
			if($newPost->save()):
			
				//if successful send success message to resource show page
				$successMessage = 'New post created.';
				$post = Post::find($newPost->id);
				return Redirect::to("admin/posts/$newPost->id")->with('post', $post)->with('successMessage', $successMessage);
				
			else:
			
				//if failed redirect back with error message
				$badMessage = 'Cant save your post at the moment. Please try again later';
				return Redirect::back()->with('badMessage', $badMessage);
			endif;
			
		endif;
		
	
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('admin/posts/show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		$subCategories = MinorCategory::all();
		return View::make('admin/posts/edit')->with('post', $post)->with('subCategories', $subCategories);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		//validate the form
		$v = Validator::make(Input::all(), Post::editFormRules($id));
		
		//check if validation passed
		if($v->fails()):
		
			//if failed redirect back with error message
			$badMessage = $v->messages();
			return Redirect::back()->withInput()->with('badMessage', $badMessage);
			
		else:
			//if passed update the post...
			
			//create new instance with id
			$editPost = Post::find($id);
			
			//set instances attributes to the inputted values
			$editPost->oTitle = Input::get('oTitle');
			
			$editPost->title = Str::slug(Input::get('oTitle'));
			
			$editPost->body = Input::get('body');
			
			$editPost->contentType = Input::get('contentType');
			
			$editPost->howToLifecycle = Input::get('howToLifecycle');
			
			$editPost->user_id = Input::get('user_id');
			
			$editPost->subTitle = Input::get('subTitle');
			
			$editPost->minorCat_id = Input::get('minorCat_id');
			
			$editPost->is_published = Input::get('is_published');
			
			//save attribute with check...
			if($editPost->save()):
		
				//if success redirect to resources show page with success message and post resource
				$successMessage = 'Post updated successfully.';
				$post = Post::find($editPost->id);
				return Redirect::to("admin/posts/$post->id")->with('post', $post)->with('successMessage', $successMessage);
			else:
				//if failed redirect back with error message
				$badMessage = 'Post could not be updated at this time';
				return Redirect::back()->withInput()->with('badMessage', $badMessage);
			//close out properly
			endif;
		//close out properly
		endif;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//create an instance of the resource
		$post = Post::find($id);
		
		//delete the resource with check
		$post->delete();
		
		//redirect to the index with successMessage
		$successMessage = 'Post deleted';
		return Redirect::to('admin/posts/')->with('successMessage', $successMessage);
	}


}
