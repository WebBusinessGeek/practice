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
		
		$this->command->info('User table seeded');
		
		$this->command->info('MajorCategory table seeded');
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
