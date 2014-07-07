<?php


class MinorCategory extends Eloquent {


	protected $table = 'minorCategories';
	
	
	protected $fillable = array('title', 'imageName', 'major_id', 'oTitle');


	public function MajorCategory(){
	
		return $this->belongsTo('MajorCategory', 'major_id');
	
	}


	public function post() {
	
		return $this->hasMany('post', 'minorCat_id');
	
	}
	
	public static $createFormRules = array(
	
						'title' => 'required|unique:minorCategories,oTitle',
						
						'image' => 'required|image',
						
						'major_id' => 'required'
						
					);
					
	public static function editFormRules($id){ 
					
					return array(
								
								'title' => "required|unique:minorCategories,oTitle,$id",
								
								'image' => "image",
								
								'major_id' => 'required'
						
						
						);
				
	}
	

}