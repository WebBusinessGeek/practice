<?php

class BlogController extends \BaseController {

	/**
	 * Show the article index of the requested minor category
	 *
	 * @return Response
	 */
	public function index()
	{
		//get the minor category requested
			
			//1. get the requested url, 2. explode it by '/', 3. and store it in an array
			$url = explode('/',Request::url());
		
			//get the last element (which should be the minor categories  slugged title)
			$title = end($url);
			
			//get the minor category resource by using the slugged title
			$subCategory = MinorCategory::where('title', '=', $title)->first();
			
			//get the minor category's post
			$posts = $subCategory->post;
			
			//get the minor category's parent category
			$category = $subCategory->MajorCategory;
			
			//return blog.index view with subCategory and its posts
			return View::make('blog.index')->with(array('subCategory'=> $subCategory, 'posts' => $posts, 'category' => $category ) );
		
		
		
		
	}


	/**
	 * Display the article requested
	 *
	 * 
	 * @return Response
	 */
	public function show()
	{
		//get the article requested
		
			//1. get the requested url, 2. explode it by '/', 3. and store it in an array
			$url = explode('/',Request::url());
		
			//get the last element (which should be the article's  slugged title)
			$title = end($url);
			
			//get the post using the title
			$post = Post::where('title', '=', $title)->first();
			
			//get the post's subcategory
			$subCategory = $post->MinorCategory;
			
			//get the subCategory's parent
			$category = $subCategory->MajorCategory;
			
			//return blog.show view with category, subCategory,  and requested post
			return View::make('blog.show')->with(array('subCategory' => $subCategory, 'post' => $post, 'category' => $category));
		
		
	}



}
