<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		
		$this->call('MajorCategoryTableSeeder');
		
		$this->call('MinorCategoryTableSeeder');
		
		$this->call('PostTableSeeder');
		
		$this->command->info('User table seeded');
		
		$this->command->info('MajorCategory table seeded');
		
		$this->command->info('MinorCategory table seeded');
		
		$this->command->info('Post table seeded');
	}

}

//User Table Seeds 
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        
        		'name' => 'kevin',
        		
        		'email' => 'kevw12188@gmail.com',
        		
        		'password' => Hash::make('testtest'),
        		
        		'admin' => '1',
        		
        		'id' => '1'
        
        
        
        )
        
     );
    }

}

//MajorCategory Table Seeds 
class MajorCategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('majorCategories')->delete();

        MajorCategory::create(array(
        
        		'id' => '1',
        		
        		'title' => 'lead-generation',
        		
        		'imageName' => 'image-default',
        		
        		'oTitle' => 'Lead Generation'
        		
        		
        		)
        );
        
        
         MajorCategory::create(array(
         
         		'id' => '2',
        
        		'title' => 'customer-acquisition',
        		
        		'imageName' => 'image-default2',
        		
        		'oTitle' => 'Customer Acquisition'
        		
        		
        		)
        );
        
        
         MajorCategory::create(array(
         
         		'id' => '3',
        
        		'title' => 'product-development',
        		
        		'imageName' => 'image-default3',
        		
        		'oTitle' => 'Product Development'
        		
        		
        		)
        );
        
        
         MajorCategory::create(array(
         
         		'id' => '4',
        
        		'title' => 'business-management',
        		
        		'imageName' => 'image-default4',
        		
        		'oTitle' => 'Business Management'
        		
        		
        		)
        );
        
         MajorCategory::create(array(
         
         		'id' => '5',
        
        		'title' => 'terms-to-know',
        		
        		'imageName' => 'image-default5',
        		
        		'oTitle' => 'Terms to know'
        		
        		
        		)
        );
        
       
         
        
         
         
         
         
         
    }
}
    
//MinorCategory Table Seeds 
class MinorCategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('minorCategories')->delete();
		
		//SubCategories tied to Lead Generation
        MinorCategory::create(array(
        
        		'id' => '1',
        
        		'title' => 'direct-communication',
        		
        		'imageName' => 'image-default6',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Direct Communication'
        		
        		
        		)
        );
        
          MinorCategory::create(array(
          
          		'id' => '2',
        
        		'title' => 'link-building-for-traffic',
        		
        		'imageName' => 'image-default7',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Link Building for Traffic'
        		
        		
        		)
        );
        
          MinorCategory::create(array(
          
          		'id' => '3',
        
        		'title' => 'email-marketing',
        		
        		'imageName' => 'image-default8',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Email Marketing'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '4',
        
        		'title' => 'content-marketing',
        		
        		'imageName' => 'image-default9',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Content Marketing'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
         
         		'id' => '5',
        
        		'title' => 'search-engine-optimization',
        		
        		'imageName' => 'image-default10',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Search Engine Optimization'
        		
        		
        		)
        );
        
        
         MinorCategory::create(array(
         
         		'id' => '6',
        
        		'title' => 'paid-advertising',
        		
        		'imageName' => 'image-default11',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Paid Advertising'
        		
        		
        		)
        );
        
        
        //Subcategories tied to Customer Acquisition
        MinorCategory::create(array(
        
        		'id' => '7',
        
        		'title' => 'landing-page-marketing',
        		
        		'imageName' => 'image-default12',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Landing Page Marketing'
        		
        		
        		)
        );
        
        
        
         MinorCategory::create(array(
         
         		'id' => '8',
        
        		'title' => 'customer-onboarding',
        		
        		'imageName' => 'image-default14',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Customer Onboarding'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
         
         		'id' => '9',
        
        		'title' => 'conversion-optimization',
        		
        		'imageName' => 'image-default13',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Conversion Optimization'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
         
         		'id' => '10',
        
        		'title' => 'product-demonstrations',
        		
        		'imageName' => 'image-default15',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Product Demonstrations'
        		
        		
        		)
        );
         
         //SubCategories related to Product Development
         MinorCategory::create(array(
         
         		'id' => '11',
        
        		'title' => 'research-planning',
        		
        		'imageName' => 'image-default16',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Research & Planning'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '12',
        		
        		'title' => 'product-design',
        		
        		'imageName' => 'image-default17',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Product Design'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '13',
        
        		'title' => 'software-development',
        		
        		'imageName' => 'image-default18',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Software Development'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '14',
        
        		'title' => 'product-launch',
        		
        		'imageName' => 'image-default19',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Product Launch'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
         
         		'id' => '15',
        
        		'title' => 'growth-management',
        		
        		'imageName' => 'image-default20',
        		
        		'major_id' => '4',
        		
        		'oTitle' => 'Growth Management'
        		
        		
        		)
        );
        
          MinorCategory::create(array(
          
          		'id' => '16',
        
        		'title' => 'talent-management',
        		
        		'imageName' => 'image-default21',
        		
        		'major_id' => '4',
        		
        		'oTitle' => 'Talent Management'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '17',
        
        		'title' => 'capital-management',
        		
        		'imageName' => 'image-default22',
        		
        		'major_id' => '4',
        		
        		'oTitle' => 'Capital Management'
        		
        		
        		)
        );
        
        //Subcategories for Terms to know 
        MinorCategory::create(array(
        
        		'id' => '18',
        		
        		'title' => 'terms-index',
        		
        		'imageName' => 'image-default23',
        		
        		'major_id' => '5',
        		
        		'oTitle' => 'Terms Index'
        		
        		
        		)
        );
        
         
         
         
    }
}
    

//Post Table Seeds 
class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();
		
		//SubCategories tied to Lead Generation
        Post::create(array(
        		
        		'id' => '1',
        
        		'title' => 'this-is-an-article-1',
        		
        		'oTitle' => 'This is an Article 1',
        		
        		'subTitle' => 'Bonbon carrot cake cookie tiramisu lemon drops marzipan
        						I love chupa chups. Tart I love bear claw I love biscuit chocolate cake donut. ', 
        		
        		'body' => 'Lollipop bear claw marzipan cake lemon drops muffin sweet caramels cheesecake. Tart icing
        		 applicake chocolate pudding jujubes gummi bears ice cream I love. Sesame snaps croissant candy pudding
        		  I love unerdwear.com apple pie. Bear claw sweet pie sugar plum unerdwear.com lollipop marzipan. I love
        		   chocolate gummi bears jelly beans apple pie brownie liquorice. Apple pie I love icing muffin. I love halvah
        			 tiramisu. Ice cream tiramisu bear claw marshmallow sugar plum unerdwear.com. Tootsie roll sweet roll
        			  liquorice jelly-o I love. Topping marshmallow macaroon muffin sugar plum bonbon carrot cake I love. ',
        		
        		//choices 'What','Application','HowTo','Inspiration','Resources'
        		'contentType' => 'What',
        		
        		//choices ONLY IF HOWTO CONTENTTYPE 'Research','Planning','Construction','Launch','Growth','None'
        		'howToLifecycle' => 'None',
        		
        		'user_id' => '1',
        		
        		/*choices
        		 1-DirComm, 2-LinkBuil, 3-Email, 4-ContMrk, 5-SEO, 6-PaidAd, 7-LandPageMrk, 8-CustOn, 9-ConvOpt,
        		 10-ProdDemo, 11-Res&Plann, 12-ProdDes, 13-SoftDev, 14-ProdLau, 15-GrowMngmt, 16-TaleMngmt,
        		 17-CapitalMgmt, 18-Termstoknow*/
        		'minorCat_id' => '1',
        		
        		//0 or 1(true)
        		'is_published' => '1',
        		
        		
        		
        		
        		
        		)
        );
        
    }
    
    
    
    
}
    
    
    
    
    
    


