<?php 

	/**
	* 
	*/
	class UsersTableSeeder extends Seeder{
		
		public function run(){

			User::create(array(
				'name'		=> 'hctr',
				'username' 	=> 'adm',
				'email'		=> 'hctr.441@gmail.com',
				'password' 	=> Hash::make('hctr666')#encripta la contraseña 
			));
		}
	}

 ?>