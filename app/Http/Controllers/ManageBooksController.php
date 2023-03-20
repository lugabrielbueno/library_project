<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ManageBooksController extends Controller
{
	public function store(Request $request)
	{
		if ($request->method == 'POST') {
		}
	}
	//
	public function create()
	{
		$books = Book::all();
		return view("managebooks.create", [
			'books' => $books
		]);
	}
}
