<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table("authors")->insert(array(
			'name'=>"Rahman Bin Romli",
			'bio'=>"My name is Rahman",
			'created_at'=>date("Y-m-d H:m:s"),
			'updated_at'=>date("Y-m-d H:m:s")
		));
		DB::table("authors")->insert(array(
			'name'=>"Azmi Bin Romli",
			'bio'=>"My name is Azmi",
			'created_at'=>date("Y-m-d H:m:s"),
			'updated_at'=>date("Y-m-d H:m:s")
		));
		DB::table("authors")->insert(array(
			'name'=>"AA Bin Romli",
			'bio'=>"My name is AA",
			'created_at'=>date("Y-m-d H:m:s"),
			'updated_at'=>date("Y-m-d H:m:s")
		));
		DB::table("authors")->insert(array(
			'name'=>"BB Bin Romli",
			'bio'=>"My name is BB",
			'created_at'=>date("Y-m-d H:m:s"),
			'updated_at'=>date("Y-m-d H:m:s")
		));
		DB::table("authors")->insert(array(
			'name'=>"VV Bin Romli",
			'bio'=>"My name is VV",
			'created_at'=>date("Y-m-d H:m:s"),
			'updated_at'=>date("Y-m-d H:m:s")
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table("authors")->where("name","=","Rahman Bin Romli")->delete();
		DB::table("authors")->where("name","=","Azmi Bin Romli")->delete();
		DB::table("authors")->where("name","=","AA Bin Romli")->delete();
		DB::table("authors")->where("name","=","BB Bin Romli")->delete();
		DB::table("authors")->where("name","=","VV Bin Romli")->delete();
	}

}
