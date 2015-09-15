<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LemonTreeDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('LemonTreeGroupTableSeeder');
		
		$this->call('LemonTreeUserTableSeeder');
	}

}
