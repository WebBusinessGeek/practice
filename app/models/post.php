<?php

class Post extends Eloquent {

		protected $table = 'posts';
		
		protected $fillable = array(
		
		'title', 'oTitle', 'subTitle', 'body', 'content', 'howToLifecycle', 
		
		'user_id', 'minorCat_id', 'is_published');


		public function user(){
			
			return $this->belongsTo('user', 'user_id');
		
		}
		
		public function MinorCategory(){
		
			return $this->belongsTo('MinorCategory', 'minorCat_id');
			
		}
		
		
		/*
		
		validation settings for post creation
		
		for following inputs:
		
			xtitle, oTitle,
 	
			xbody, 
	
			xcontentType ('What', 'Application', 'HowTo', 'Inspiration', 'Resources'),
	
			xhowToLifecycle ('Research', 'Planning', 'Construction', 'Launch', 'Growth', 'None'), 
	
			xuser_id, 
			
			subTitle
	
			xminorCat_id, 
	
			xis_published
		
		*/
		public static $createFormRules = array(
		
								'oTitle' => 'required|unique:posts,oTitle',
								
								'body' => 'required',
								
								'contentType' => 'required|in:What,Application,HowTo,Inspiration,Resources',
								
								'howToLifecycle' => 'required|in:Research,Planning,Construction,Launch,Growth,None',
								
								'user_id' => 'required|integer|exists:users,id',
								
								'minorCat_id' => 'required|integer|exists:minorCategories,id',
								
								'is_published' =>'required|boolean',
								
								'subTitle' => 'required'
								
		
		);
		
		
		public static function editFormRules($id){
		
				return array(
				
							'oTitle' => "required|unique:posts,oTitle,$id",
							
							'body' => 'required',
							
							'contentType' => 'required|in:What,Application,HowTo,Inspiration,Resources',
							
							'howToLifecycle' => 'required|in:Research,Planning,Construction,Launch,Growth,None',
								
							'user_id' => 'required|integer|exists:users,id',
							
							'minorCat_id' => 'required|integer|exists:minorCategories,id',
							
							'is_published' =>'required|boolean',
							
							'subTitle' => 'required'
					
				
				);
		
		
		}




}