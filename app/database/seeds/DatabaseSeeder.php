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
		
		$this->command->info('User table seeded');
		
		$this->command->info('MajorCategory table seeded');
		
		$this->command->info('MinorCategory table seeded');
	}

}


class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        
        		'name' => 'kevin',
        		
        		'email' => 'kevw12188@gmail.com',
        		
        		'password' => Hash::make('testtest'),
        		
        		'admin' => '1'
        
        
        
        )
        
     );
    }

}


class MajorCategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('majorCategories')->delete();

        MajorCategory::create(array(
        
        		'title' => 'lead-generation',
        		
        		'imageName' => 'image-default',
        		
        		'oTitle' => 'Lead Generation'
        		
        		
        		)
        );
        
        
         MajorCategory::create(array(
        
        		'title' => 'customer-acquisition',
        		
        		'imageName' => 'image-default2',
        		
        		'oTitle' => 'Customer Acquisition'
        		
        		
        		)
        );
        
        
         MajorCategory::create(array(
        
        		'title' => 'product-development',
        		
        		'imageName' => 'image-default3',
        		
        		'oTitle' => 'Product Development'
        		
        		
        		)
        );
        
        
         MajorCategory::create(array(
        
        		'title' => 'business-management',
        		
        		'imageName' => 'image-default4',
        		
        		'oTitle' => 'Business Management'
        		
        		
        		)
        );
        
         MajorCategory::create(array(
        
        		'title' => 'terms-to-know',
        		
        		'imageName' => 'image-default5',
        		
        		'oTitle' => 'Terms to know'
        		
        		
        		)
        );
        
       
         
        
         
         
         
         
         
    }
}
    
    
class MinorCategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('minorCategories')->delete();
		
		//SubCategories tied to Lead Generation
        MinorCategory::create(array(
        
        		'title' => 'direct-communication',
        		
        		'imageName' => 'image-default6',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Direct Communication'
        		
        		
        		)
        );
        
          MinorCategory::create(array(
        
        		'title' => 'link-building-for-traffic',
        		
        		'imageName' => 'image-default7',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Link Building for Traffic'
        		
        		
        		)
        );
        
          MinorCategory::create(array(
        
        		'title' => 'email-marketing',
        		
        		'imageName' => 'image-default8',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Email Marketing'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'title' => 'content-marketing',
        		
        		'imageName' => 'image-default9',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Content Marketing'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
        
        		'title' => 'search-engine-optimization',
        		
        		'imageName' => 'image-default10',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Search Engine Optimization'
        		
        		
        		)
        );
        
        
         MinorCategory::create(array(
        
        		'title' => 'paid-advertising',
        		
        		'imageName' => 'image-default11',
        		
        		'major_id' => '1',
        		
        		'oTitle' => 'Paid Advertising'
        		
        		
        		)
        );
        
        
        //Subcategories tied to Customer Acquisition
        MinorCategory::create(array(
        
        		'title' => 'landing-page-marketing',
        		
        		'imageName' => 'image-default12',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Landing Page Marketing'
        		
        		
        		)
        );
        
        
        
         MinorCategory::create(array(
        
        		'title' => 'customer-onboarding',
        		
        		'imageName' => 'image-default14',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Customer Onboarding'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
        
        		'title' => 'conversion-optimization',
        		
        		'imageName' => 'image-default13',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Conversion Optimization'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
        
        		'title' => 'product-demonstrations',
        		
        		'imageName' => 'image-default15',
        		
        		'major_id' => '2',
        		
        		'oTitle' => 'Product Demonstrations'
        		
        		
        		)
        );
         
         //SubCategories related to Product Development
         MinorCategory::create(array(
        
        		'title' => 'research-planning',
        		
        		'imageName' => 'image-default16',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Research & Planning'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'title' => 'product-design',
        		
        		'imageName' => 'image-default17',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Product Design'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'title' => 'software-development',
        		
        		'imageName' => 'image-default18',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Software Development'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'title' => 'product-launch',
        		
        		'imageName' => 'image-default19',
        		
        		'major_id' => '3',
        		
        		'oTitle' => 'Product Launch'
        		
        		
        		)
        );
        
         MinorCategory::create(array(
        
        		'title' => 'growth-management',
        		
        		'imageName' => 'image-default20',
        		
        		'major_id' => '4',
        		
        		'oTitle' => 'Growth Management'
        		
        		
        		)
        );
        
          MinorCategory::create(array(
        
        		'title' => 'talent-management',
        		
        		'imageName' => 'image-default21',
        		
        		'major_id' => '4',
        		
        		'oTitle' => 'Talent Management'
        		
        		
        		)
        );
        
        MinorCategory::create(array(
        
        		'title' => 'capital-management',
        		
        		'imageName' => 'image-default22',
        		
        		'major_id' => '4',
        		
        		'oTitle' => 'Capital Management'
        		
        		
        		)
        );
        
        //Subcategories for Terms to know 
        MinorCategory::create(array(
        
        		'title' => 'terms-index',
        		
        		'imageName' => 'image-default23',
        		
        		'major_id' => '5',
        		
        		'oTitle' => 'Terms Index'
        		
        		
        		)
        );
        
         
         
         
    }

}
