<?php


class MajorCategory extends Eloquent {


	protected $table = 'majorCategories';
	
	
	protected $fillable = array('title', 'imageName', 'oTitle');


	public function MinorCategory(){
	
		return $this->hasMany('MinorCategory','major_id', 'id');
	
	}

	public static $createFormRules = array(
	
						'title' => 'required|unique:majorCategories,oTitle',
						
						'image' => 'required|image'
						
					);


	public static function editFormRules($id){ 
					
					return array(
								
								'title' => "required|unique:majorCategories,oTitle,$id",
								
								'image' => "image"
						
						
						);
				
	}
	
		

}