<<?php 

/**
* 
*/
class UserTableSeeder extends Seeder
{
	
	public function run()
	{
	$user= new User;

		$user->nome='Amelia';
		$user->tipo_id=3;
		$user->username='amelia@gmail.com';
		$user->password= Hash::make('123456');
		$user->save();
	}
}