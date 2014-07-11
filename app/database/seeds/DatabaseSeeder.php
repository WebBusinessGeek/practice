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
        
        		'title' => 'Lead-Generation',
        		
        		'imageName' => 'image-default',
        		
        		'oTitle' => 'Lead-Generation'
        		
        		
        		)
        );
        
       
         
        
         
         
         
         
         
    }

}
