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
        		
        		'imageName' => 'lead-generation.png',
        		
        		'oTitle' => 'Lead Generation'
        		
        		
        		)
        );
        
        
         MajorCategory::create(array(
         
         		'id' => '2',
        
        		'title' => 'customer-acquisition',
        		
        		'imageName' => 'customer-acquisition.png',
        		
        		'oTitle' => 'Customer Acquisition'
        		
        		
        		)
        );
        
        
         MajorCategory::create(array(
         
         		'id' => '3',
        
        		'title' => 'product-development',
        		
        		'imageName' => 'product-development.png',
        		
        		'oTitle' => 'Product Development'
        		
        		
        		)
        );
        
        
         MajorCategory::create(array(
         
         		'id' => '4',
        
        		'title' => 'business-management',
        		
        		'imageName' => 'business-management.png',
        		
        		'oTitle' => 'Business Management'
        		
        		
        		)
        );
        
         MajorCategory::create(array(
         
         		'id' => '5',
        
        		'title' => 'terms-to-know',
        		
        		'imageName' => 'terms-to-know.png',
        		
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
        		
        		'imageName' => 'direct-communication.png',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Direct Communication'
        		
        		
        		)
        );
        
          MinorCategory::create(array(
          
          		'id' => '2',
        
        		'title' => 'link-building-for-traffic',
        		
        		'imageName' => 'link-building-traffic.png',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Link Building for Traffic'
        		
        		
        		)
        );
        
          MinorCategory::create(array(
          
          		'id' => '3',
        
        		'title' => 'email-marketing',
        		
        		'imageName' => 'email-marketing.png',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Email Marketing'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '4',
        
        		'title' => 'content-marketing',
        		
        		'imageName' => 'content-managment.png',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Content Marketing'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
         
         		'id' => '5',
        
        		'title' => 'search-engine-optimization',
        		
        		'imageName' => 'SEO.png',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Search Engine Optimization'
        		
        		
        		)
        );
        
        
         MinorCategory::create(array(
         
         		'id' => '6',
        
        		'title' => 'paid-advertising',
        		
        		'imageName' => 'paid-advertising.png',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Paid Advertising'
        		
        		
        		)
        );
        
        
        //Subcategories tied to Customer Acquisition
        MinorCategory::create(array(
        
        		'id' => '7',
        
        		'title' => 'landing-page-marketing',
        		
        		'imageName' => 'landing-page-marketing.png',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Landing Page Marketing'
        		
        		
        		)
        );
        
        
        
         MinorCategory::create(array(
         
         		'id' => '8',
        
        		'title' => 'customer-onboarding',
        		
        		'imageName' => 'customer-onboarding.png',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Customer Onboarding'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
         
         		'id' => '9',
        
        		'title' => 'conversion-optimization',
        		
        		'imageName' => 'conversion-optimization.png',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Conversion Optimization'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
         
         		'id' => '10',
        
        		'title' => 'product-demonstrations',
        		
        		'imageName' => 'product-demonstrations.png',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Product Demonstrations'
        		
        		
        		)
        );
         
         //SubCategories related to Product Development
         MinorCategory::create(array(
         
         		'id' => '11',
        
        		'title' => 'research-planning',
        		
        		'imageName' => 'research-planning.png',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Research & Planning'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '12',
        		
        		'title' => 'product-design',
        		
        		'imageName' => 'product-design.png',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Product Design'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '13',
        
        		'title' => 'software-development',
        		
        		'imageName' => 'software-development.png',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Software Development'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '14',
        
        		'title' => 'product-launch',
        		
        		'imageName' => 'product-launch.png',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Product Launch'
        		
        		
        		)
        );
        
        //subCategories for business management
        
         MinorCategory::create(array(
         
         		'id' => '15',
        
        		'title' => 'growth-management',
        		
        		'imageName' => 'growth-management.png',
        		
        		'major_id' => '4',
        		
        		'oTitle' => 'Growth Management'
        		
        		
        		)
        );
        
          MinorCategory::create(array(
          
          		'id' => '16',
        
        		'title' => 'talent-management',
        		
        		'imageName' => 'talent-management.png',
        		
        		'major_id' => '4',
        		
        		'oTitle' => 'Talent Management'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'id' => '17',
        
        		'title' => 'capital-management',
        		
        		'imageName' => 'capital-management.png',
        		
        		'major_id' => '4',
        		
        		'oTitle' => 'Capital Management'
        		
        		
        		)
        );
        
        //Subcategories for Terms to know 
        MinorCategory::create(array(
        
        		'id' => '18',
        		
        		'title' => 'terms-index',
        		
        		'imageName' => 'know.png',
        		
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
        
        //create arrays
        
                //content types
                $contentType = [
                    'What','Application','HowTo','Inspiration','Resources'
                ];
        
                //howTo Lifecycle
                $howTo = [
                    'Research','Planning','Construction','Launch','Growth','None'
                ];
                
                //minorCategories
                $minorCats = [
                  1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18
                ];
        
        //create variables
               
                //published?
                $is_published = true;
        
                //user_id
                $user_id = 1;
        
                //title
                $title = 'this-is-an-article-title'.$x;
        
                //oTitle
                $oTitle = 'This is an article title'.$x;
        
                //subTitle
                $subTitle = 'Here is my very creative Sub Title. Read it and grow with envy!';
        
                //body
                $body = 'Lollipop bear claw marzipan cake lemon drops muffin sweet caramels cheesecake. Tart icing
        		 applicake chocolate pudding jujubes gummi bears ice cream I love. Sesame snaps croissant candy pudding
        		  I love unerdwear.com apple pie. Bear claw sweet pie sugar plum unerdwear.com lollipop marzipan. I love
        		   chocolate gummi bears jelly beans apple pie brownie liquorice. Apple pie I love icing muffin. I love halvah
        			 tiramisu. Ice cream tiramisu bear claw marshmallow sugar plum unerdwear.com. Tootsie roll sweet roll
        			  liquorice jelly-o I love. Topping marshmallow macaroon muffin sugar plum bonbon carrot cake I love. ';
        
      
                //non-howTo articles
                function nonHowTo($a,$b,$c,$d,$e,$f,$g,$h,$i){
                    
                    return [
                        'user_id' => $b,

                        'title' => $c,

                        'oTitle' => $d,

                        'subTitle' => $e, 

                        'body' => $f,

                        //choices 'What','Application','HowTo','Inspiration','Resources'
                        'contentType' => $g[$a],

                        //choices ONLY IF HOWTO CONTENTTYPE
                        'howToLifecycle' => $h[5],

                        'minorCat_id' => $a,

                        //0 or 1(true)
                        'is_published' => $i
                    ];
                }

            for($count = 0; $count < 18; $count++):
                static $r = 0;
                global $r;
                if($r == 2):
                    $r++;
                endif;
                Post::create(nonHowTo($r, $user_id, $title, $oTitle, $subTitle, $body, $contentType, $howTo, $is_published));

                $r++;
            endfor;
        
        
        
    }
    
    
    
    
}
    
    
    
    
    
    


