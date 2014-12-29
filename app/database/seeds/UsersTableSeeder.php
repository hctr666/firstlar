<?php 

	/**
	* 
	*/
	class UsersTableSeeder extends Seeder{
		
		public function run(){

			User::create(array(
				'name'		=> 'Hctr',
				'username' 	=> 'admin',
				'email'		=> 'demmon.rules@gmail.com',
				'password' 	=> Hash::make('admin')#encripta la contraseña 
			));
		}
	}

 ?>