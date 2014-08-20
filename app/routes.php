<?php





Route::get('/', function()
{
	return View::make('templates.cover');
}
);

Route::get('blog/{category}/{subcategory}', 'BlogController@index');

Route::get('blog/{category}/{subcategory}/{article}', 'BlogController@show');

Route::get('/admin', function()
{
	return View::make('templates.admin');
}
);
	

//login routes
Route::get('admin/users/login', function()
{
	Session::flash('badMessage', 'You have to log in first');
	return View::make('admin.users.login');

});


Route::get('/login', function()
{	

	Session::flash('badMessage', 'You have to log in first');
	return View::make('admin.users.login');
});

Route::post('admin/users/login', 'UserController@login');


//logout routes
Route::get('admin/users/logout', function()
{
	return View::make('admin.users.logout');
});

Route::post('admin/users/logout', 'UserController@logout');




Route::get('/artic/ajax/', function(){
    
    return Post::all()->toArray();
});


Route::get('/category/ajax/', function(){
    
    return MinorCategory::all()->toArray();
});







//resource controller routes- users, posts, category, subcategory
Route::group(array('before' => 'auth'), function(){
Route::resource('admin/users', 'UserController');

Route::resource('admin/posts', 'PostController');

Route::resource('admin/category', 'MajorCategoryController');

Route::resource('admin/subcategory', 'MinorCategoryController');


});

