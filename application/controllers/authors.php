<?php

	class Authors_Controller extends Base_Controller
	{
		// enable RESTful controller
		public $restful = true;

		public function get_index()
		{
			$title = "Authors and Books";
			//$authors = Author::all();
			$authors = Author::order_by('name','desc')->get();

			return View::make('authors.index', array(
				'title' => $title,
				'authors' => $authors
			));
		}

		public function get_view($id)
		{
			$title = 'Author View Page';
			$author = Author::find($id);

			return View::make('authors.view')->with('title', $title)->with('author',$author);
		}

		public function get_new()
		{
			$title = 'Create New Author';
			return View::make('authors.new')->with('title',$title);
		}

		public function post_create()
		{
			$validation = Author::validate(Input::all());

			if($validation->fails())
			{
				return Redirect::to_route('new_author')->with_errors($validation)->with_input();
			}
			else
			{
				Author::create(array(
					'name' => Input::get('name'),
					'bio' => Input::get('bio')
				));

				return Redirect::to_route('authors')->with('message', 'Author is successfully saved');
			}
			
		}

		public function get_edit($id)
		{
			$title = 'Edit Author';
			$author = Author::find($id);
			return View::make('authors.edit')->with('title',$title)->with('author',$author);
		}

		public function post_update()
		{
			$id = Input::get('id');
			$validation = Author::validate(Input::all());

			if($validation->fails())
			{
				return Redirect::to_route('edit_author', $id)->with_errors($validation);
			}
			else
			{
				Author::update($id, array(
					'name' => Input::get('name'),
					'bio' => Input::get('bio')
				));

				return Redirect::to_route('authors')->with('message', 'Author is successfully saved');
			}
		}

		public function get_delete($id)
		{
			$author = Author::find($id)->delete();
			return Redirect::to_route('authors')->with('message', 'Author is successfully deleted');
		}
	}