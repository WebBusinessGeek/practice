<?php

class QuickUserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('quick/index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quick/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	
		//run validation on the form
		$v = Validator::make(Input::all(), User::$createFormRules);
		
		//if fails redirect back with input and message
		if($v->fails()):
			$badMessage = $v->messages();
			return Redirect::back()->withInput()->with('badMessage', $badMessage);
			
		else:
			//if successful then create and save the user
			$newUser = User::create(array(
			
				'name' => Input::get('name'),
				
				'email' => Input::get('email'),
				
				'password' => Hash::make(Input::get('password')),
				
				'admin' => Input::get('admin')
			
			)
			);
			
			$newUser->save();
		endif;
		
		//check if newUser was created
		$id = $newUser->id;
		$checkUser= User::find($id);
		
		if(!$checkUser):
			//if not saved redirect back with error
			$badMessage = 'Unable to save new user, care to try again?';
			return Redirect::back()->with('badMessage', $badMessage);
		else:
			//if saved show new resource with success message FOR NOW REDIRECT BACK
			$successMessage = 'New user created!';
			return Redirect::to("quick/$checkUser->id")->with('successMessage', $successMessage);
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
		$user = User::find($id);
		return View::make('quick/show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('quick/edit')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//get resource being updated
		$user = User::find($id);
		
		//run validation on the form
		$v = Validator::make(Input::all(), User::editFormRules($id));
		
		//check if form passed validation
		if($v->fails()):
			
			//if validation fails redirect back with error message
			$badMessage = $v->messages();
			return Redirect::back()->with('badMessage', $badMessage);
		
		else:
			//if validation is passed check that the password entered matches the hashed password
			if(Hash::check(Input::get('password'), $user->password)):
				
				//if the passwords dont match redirect back with error message
				$badMessage = 'The password you entered doesn\'t match our records';
				return Redirect::back()->with('badMessage', $badMessage);
			else:
				//if the passwords do match then update the user
				$user->name = Input::get('name');
				
				$user->email = Input::get('email');
				
				$user->admin = Input::get('admin');
				
				$user->save();
				
				//return to resource show bad with success message
				$successMessage = 'Author successfully updated!';
				return Redirect::to("quick/$user->id")->with(array('user'=> $user, 'successMessage'=> $successMessage));
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
		//get and delete the resource with a check
		if($deleteUser = User::find($id)->delete()):
			
			//if delete was successful redirect to index with successMessage and with Users
			$successMessage = 'Author deleted.';
			$users = User::all();
			return Redirect::to('quick/users')->with(array('successMessage' => $successMessage, 'users' => $users));
			
		else:
			//if unsuccessful the redirect with error message
			$badMessage = 'Author could not be deleted';
			$users = User::all();
			return Redirect::back()->with('badMessage', $badMessage);
		endif;
		
		
		
	}
	
	
	public function login()
	{
		//check validation
		$v = Validator::make(Input::all(), User::$loginFormRules);
		
		//if validation fails return back with error message
		if($v->fails()):
			$badMessage = $v->messages();
			return Redirect::back()->with('badMessage', $badMessage);
		
		else:
			//if validation passess attempt to log them in
			
			//get email
			$email = Input::get('email');
			
			//get password
			$password = Input::get('password');
			
			//login attempt with credentials submitted
			if(Auth::attempt(array('email' => $email, 'password' => $password))):
				
				//if log in successful get the resource 
				$id = Auth::id();
				$user = User::find($id);
				
				//redirect to show page with user and success message
				$successMessage = "Hello $user->name, you have been logged in.";
				return Redirect::to("admin/users/$user->id")->with(array('successMessage' =>$successMessage, 'user' => $user) );
				
			else:
				
				//if login fails redirect with error message
				$badMessage = 'Your email or password does not match our records. Fix it guy';
				return Redirect::back()->withInput()->with('badMessage', $badMessage);
			endif;
		endif;
		
	
	
	}
	
	
	
	
	public function logout()
	{
	
		//log out the user
		Auth::logout();
		$successMessage = 'You have been logged out of the application';
		return Redirect::to('admin/users/login')->with('successMessage', $successMessage);
			
	
	
	}


}

