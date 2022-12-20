<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookStorageController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}


	/**
	 *
	 * Create a new book on database
	 */
	public function create()
	{
		return view('books.create');
	}
}
