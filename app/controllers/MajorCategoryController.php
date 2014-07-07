<?php

class MajorCategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = MajorCategory::all();
		return View::make('admin/category/index')->with('categories', $categories);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin/category/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//run validation on the form input
		$v = Validator::make(Input::all(), MajorCategory::$createFormRules);
		
		//check if validation was successful
		if($v->fails()):
		
			//if unsuccessful redirect back with input and error message
			$badMessage = $v->messages();
			return Redirect::back()->withInput()->with('badMessage', $badMessage);
		
		//if successful handle the inputs
		else:
			//get the original title
			$oTitle = Input::get('title');
			
			//make url friendly title
			$title = Str::slug(Input::get('title'));
			
			//get the image
			$image = Input::file('image');
			
			
			//make the starter file name
			$preFilename = Str::slug(Str::random(8).$image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
			
			
			
			//check if name is already in database
			$nameCheck = MajorCategory::where('imageName', '=', $preFilename)->first();
			
			if($nameCheck):
				//if its in the database re-salt
				$imageName = Str::random(6).$preFilename;
			else:
				//if its not in the database store in new variable
				$imageName = $preFilename;
			endif;
		
			//store the record
			$newRecord = MajorCategory::create([
			
						'title' => $title, 
										
						'imageName' => $imageName,
						
						'oTitle' => $oTitle
					
					]
			
			)->save();
			
			//check if record was saved
			$category = MajorCategory::where('title', '=', $title)->first();
			if(!$category):
			
				//if not redirect back with error message
				$badMessage = 'Cannot save category at this time';
				return Redirect::back()->with('badMessage', $badMessage);
				
			else:
			
				//if save was successful then save the image to public uploads
				$upload = $image->move(public_path().'/uploads/', $imageName);
				
				//check if uploaded
				if(file_exists('public/uploads/'.$imageName == false)):
					
					//if not redirect with error message
					$badMessage = 'Could not upload image';
					return Redirect::back()->with('badMessage', $badMessage);
					
				else:
					//then resize the image
					$imageForResize = Image::make('public/uploads/'.$imageName)->resize(300,200)->save(public_path().'/uploads/resized/'.$imageName);
					
					//check if resized image was uploaded
					if(file_exists('public/resized/'.$imageName == false)):
				
						//if not redirect back with error message
						$badMessage = 'Could not save resized image';
						return Redirect::back()->with('badMessage', $badMessage);
						
					else:
						
						//if successful then redirect back with success message
						$successMessage = 'Category successfully added!';
						return Redirect::to("admin/category/$category->id")->with('category', $category)->with('successMessage', $successMessage);
					endif;
				
				
				endif;
				
				
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
		$category = MajorCategory::find($id);
		return View::make('admin/category/show')->with('category', $category);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = MajorCategory::find($id);
		return View::make('admin/category/edit')->with('category', $category);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//get the resource being update
		$category = MajorCategory::find($id);
		
		//validate the form
		$v= Validator::make(Input::all(), MajorCategory::editFormRules($id));
		
		//check if validation failed
		if($v->fails()):
		//if failed return to form with error message
			$badMessage = $v->messages();
			return Redirect::back()->withInput()->with('badMessage', $badMessage);
		else:
		
			// if successful change the title and the oTitle of the resource
			$category->oTitle = Input::get('title');
			
			$category->title = Str::slug(Input::get('title'));
		endif;
		
		//check if image was submitted
		if(Input::file('image') == null):
			
			//if not save record and return to the admin/category/show view with the resource id
			$category->save();
			$successMessage = 'Category Successfully updated!';
			return Redirect::to("admin/category/$category->id")->with('category', $category)->with('successMessage', $successMessage);
			
		//if an image was subbmitted handle it
		else:
			
			//get the image
			$image = Input::file('image');
			
			//make the starter file name
			$preFilename = Str::slug(Str::random(8).$image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
			
			//check if name is already in database
			$nameCheck = MajorCategory::where('imageName', '=', $preFilename)->first();
			if($nameCheck):
			
				//if its in the database re-salt
				$imageName = Str::random(6).$preFilename;
			else:
				//if its not in the database store in new variable
				$imageName = $preFilename;
			endif;
			
			//get old imageName
			$fileName = $category->imageName;
			
			//delete the file from uploads folder and the resize folder using old imageName
			File::delete('public/uploads/'.$fileName, 'public/uploads/resized/'.$fileName);
			
			//check if the image files were deleted from the system
			if(file_exists('public/uploads/'.$fileName)|| file_exists('public/uploads/'.$imageName ) ):
				$badMessage = 'Image Files not deleted, time to visit the codebase';
				return Redirect::back()->with('badMessage', $badMessage);
				
			else:
			
				//store new imageName
				$category->imageName = $imageName;
				
				//save the updated resource
				$category->save();
				
				//save the image to public uploads
				$upload = $image->move(public_path().'/uploads/', $imageName);
				
				//check if uploaded successfully
				if(file_exists('public/uploads/'.$imageName == false)):
					
					//if not redirect with error message
					$badMessage = 'Could not upload image';
					return Redirect::back()->with('badMessage', $badMessage);
					
				else:
					//then resize the image
					$imageForResize = Image::make('public/uploads/'.$imageName)->resize(300,200)->save(public_path().'/uploads/resized/'.$imageName);
					
					//check if resized image was uploaded
					if(file_exists('public/resized/'.$imageName == false)):
				
						//if not redirect back with error message
						$badMessage = 'Could not save resized image';
						return Redirect::back()->with('badMessage', $badMessage);
						
					else:
						
						//if successful then redirect back with success message
						$successMessage = 'Category Successfully updated!';
						return Redirect::to("admin/category/$category->id")->with('category', $category)->with('successMessage', $successMessage);
					endif;
				
				
				endif;
				
				
				
				
			endif;
			
			
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
		//get resource
		$category = MajorCategory::find($id);
		
		//get old imageName
		$fileName = $category->imageName;
		
		//delete the resources relationships
		$category->MinorCategory()->delete();
		
		//delete resource with a check
		if($category->delete()):
		
			
			//delete the file from uploads folder and the resize folder using old imageName
			File::delete('public/uploads/'.$fileName, 'public/uploads/resized/'.$fileName);
		
			//if successful redirect with successMessage
			$successMessage = 'Category deleted, create a new one';
			return Redirect::to('admin/category')->with('successMessage', $successMessage);
		//otherwise something more serious is wrong and needs to be looked at
		else:
		
			//redirect with error message
			$badMessage = 'Something is wrong, need to look at the codebase';
			return Redirect::back()->with('badMessage', $badMessage);
		endif;
	}


}
