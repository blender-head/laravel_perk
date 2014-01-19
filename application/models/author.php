<?php

	class Author extends Eloquent
	{
		// if you don't follow Laravel file naming conventions
		public static $table = 'authors';

		// validation rules
		public static $rules = array(
			'name' => 'required|min:2', // required with a minimum of 2 characters
			'bio' => 'required|min:10' // required with a minimum of 10 characters
		);

		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
	}