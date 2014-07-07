<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	
	protected $fillable = array('name', 'email', 'password', 'admin');
	
	
	public function post(){
	
		return $this->hasMany('post', 'user_id', 'id');
	
	}

	//name email password admin
	public static $createFormRules = array(
						
						'name' => 'required|unique:users,name',
						
						'email' => 'required|unique:users,email',
						
						'password' => 'required|confirmed',
						
						'admin' => 'required|boolean'
					
	
	
	);
	
	public static function editFormRules($id){
	
				return array(
					
						'name' => "required|unique:users,name,$id",
						
						'email' => "required|unique:users,email,$id",
						
						'password' => 'required',
						
						'admin' => 'required|boolean'
				
				
				);
	}
	
	public static $loginFormRules = array(
	
						'email' => 'required',
						
						'password' => 'required'
					
	);
	
	
}
