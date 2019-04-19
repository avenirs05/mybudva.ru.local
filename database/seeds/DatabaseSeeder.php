<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {		
		$this->call(ContentsTableSeeder::class);
		//$this->call(RealtiesTableSeeder::class);
		//$this->call(ImagesTableSeeder::class);
		$this->call(UsersTableSeeder::class);	
		$this->call(ParametersTableSeeder::class);	
	}
}
