<?php

	class Author extends Eloquent{

		protected $table = "authors";
		public static $rules = array(
			'name' => 'required|min:2',
			'bio' => 'required|min:10'
		);

		public static function validate($data){
			return Validator::make($data, static::$rules);
		}

		protected $softDelete = true;
		protected $guarded = array();  // Important
	}