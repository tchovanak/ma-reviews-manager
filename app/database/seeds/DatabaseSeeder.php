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

		//insert some dummy records
		 DB::table('company')->delete();
		 DB::table('portal')->delete();
		 DB::table('redactor')->delete();
         DB::table('contact')->delete();
		 
		 DB::table('contact')->insert(array(
             array('id'=>'1','first_name'=>'František','last_name'=>'Chovaňák','contact_phone'=>'975-1654-45','contact_email'=>'fchovanak@gmail.com'),
			 array('id'=>'2','first_name'=>'Michal','last_name'=>'Chovaňák','contact_phone'=>'0944206701','contact_email'=>'mchovanak@gmail.com'),
			 array('id'=>'3','first_name'=>'Ondrej','last_name'=>'Ličko','contact_phone'=>'0940776632','contact_email'=>'olicko@gmail.com'),
          ));
		  
		  DB::table('company')->insert(array(
             array('id'=>'1','label'=>'Samsung'),
			 array('id'=>'2','label'=>'HTC'),
			 array('id'=>'3','label'=>'Sony'),
			 array('id'=>'4','label'=>'LG'),
			 array('id'=>'5','label'=>'Meizu')
          ));
		  
		  DB::table('portal')->insert(array(
             array('id'=>'1','label'=>'MA'),
			 array('id'=>'2','label'=>'MI'),
			 array('id'=>'3','label'=>'MW')
          ));
		  
		  DB::table('redactor')->insert(array(
             array('id'=>'1','id_contact'=>'1'),
			 array('id'=>'2','id_contact'=>'2'),
			 array('id'=>'3','id_contact'=>'3'),
          ));
		  
		   DB::table('device_type')->insert(array(
             array('id'=>'1','label'=>'Smartfón'),
			 array('id'=>'2','label'=>'Hodinky'),
			 array('id'=>'3','label'=>'Tablet'),
			 array('id'=>'4','label'=>'Príslušenstvo'),
          ));
		  
	}

}