<?php

	class AuthorsController extends BaseController {
		// public $restful = true;
		// protected $layout = 'layouts.default';
		public function get_index(){
			// return View::make("authors.index", array('title'=>"Test 123"));	//Normal method

			//Second method
			// $view = View::make("authors.index", array('title'=>"Test 123"))
			// 	->with('age','21');
			// $view->location = "Malaysia";
			// $view["specialty"] = "Nothing";

			// return $view;
			return View::make("authors.index")
			    ->with('title','Welcome')
			    ->with('authors', Author::orderBy('name')->get());
		}

		public function view($id){
			return View::make("authors.view")
			 	->with("title","Author View Page")
			 	->with('author', Author::find($id));
		}

		public function new_author(){
			return View::make("authors.new_author")
			 	->with("title","New author");
		}

		public function create(){
			$validation = Author::validate(Input::all());
			if ($validation->fails()){
				return Redirect::to("authors/new")->withErrors($validation)->withInput();
			}else{
				Author::create(array(
					'name' => Input::get('name'),
					'bio' => Input::get('bio')
				));
				return Redirect::to("authors")->with('message','The author was create successfully!');
			}
		}

		public function edit($id){
			return View::make("authors.edit")
			 	->with("title","Edit Author")
			 	->with('author', Author::find($id));
		}

		public function updates(){
			$id = Input::get('id');
			$validation = Author::validate(Input::all());
			if ($validation->fails()){
				return Redirect::action("edit", $id)->withErrors($validation);
			}else{
				Author::find($id)->update(array(
					'name' => Input::get('name'),
					'bio' => Input::get('bio')
				));
				// $var = Redirect::to("author", $id)
				//   ->with('message','The author was update successfully!');
				// die($var);
				return Redirect::action("edit", $id)
				  ->with('message','The author was update successfully!');
			}
		}

		public function destroy(){
			Author::find(Input::get('id'))->delete();
			return Redirect::to("authors")
				  ->with('message','The author was delete successfully!');
		}
	}