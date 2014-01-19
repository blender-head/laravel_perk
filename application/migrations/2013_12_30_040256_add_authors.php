<?php

class Add_Authors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// insert data to 'authors' table using DB class
		DB::table('authors')->insert(array(
			'name' => 'Author 1',
			'bio' => 'Author 1 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name' => 'Author 2',
			'bio' => 'Author 2 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name' => 'Author 3',
			'bio' => 'Author 3 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name' => 'Author 4',
			'bio' => 'Author 4 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name' => 'Author 5',
			'bio' => 'Author 5 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name' => 'Author 6',
			'bio' => 'Author 6 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name' => 'Author 7',
			'bio' => 'Author 7 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name' => 'Author 8',
			'bio' => 'Author 8 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name' => 'Author 9',
			'bio' => 'Author 9 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name' => 'Author 10',
			'bio' => 'Author 10 bio',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// delete data
		DB::table('authors')->where('name','=','Author 1')->delete();
		DB::table('authors')->where('name','=','Author 2')->delete();
	}

}