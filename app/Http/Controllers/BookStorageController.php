<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;

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


	public function create()
	{
		return view('books.create');
	}


	/**
	 * Create a new book on database
	 */
	public function store(Request $request)

	{
		if ($request->method() == 'POST') {
			$book = new Book();
			$book->title = $request->input('title');
			$book->author = $request->input('author');
			$book->publication_date = $request->input('pub_date');
			$book->edition_date = $request->input('edition_date');
			$book->pages = $request->input('pages');

			$response = $book->save();
			if ($response) {
				return redirect("/books/create")->with('message', "Book created successfully ! ")->with('status', 1);
			} else {
				return redirect("/books/create")->with('message', "Failed to create book, try again.")->with('status', 0);
			}
		} else {
			return view('books.create');
		}
	}


	public function detail($book)
	{
		$book = Book::find($book);
		return view('books.detail', [
			'book' => $book
		]);
	}

	public function update($book)
	{
		$book = Book::find($book);
		return view('books.update', [
			"book" => $book
		]);
	}


	public function delete($book)
	{
		$book = Book::find($book);
		return view('books.delete', [
			"book" => $book
		]);
	}


	public function delete_book(Request $request, $book_id)
	{
		$book = Book::find($book_id);
		if ($request->method() == 'delete') {

			$response = $book->delete();
			if ($response) {
				return redirect("/books")->with('message', "Book deleted successfully ! ")->with('status', 1);
			} else {
				return redirect("/books/{$book_id}/detail")->with('message', "Failed to deleted book, try again.")->with('status', 0);
			}
		}
	}

	public function list()
	{
		$books = Book::all();
		return view("books.list", [
			'books' => $books
		]);
	}

	public function update_book(Request $request, $book_id)
	{
		$book = Book::find($book_id);
		if ($request->method() == 'POST') {
			$book->title = $request->input('title');
			$book->author = $request->input('author');
			$book->publication_date = $request->input('pub_date');
			$book->edition_date = $request->input('edition_date');
			$book->pages = $request->input('pages');

			$response = $book->save();
			if ($response) {
				return redirect("/books/{$book_id}/edit")->with('message', "Book updated successfully ! ")->with('status', 1);
			} else {
				return redirect("/books/{$book_id}/edit")->with('message', "Failed to update book, try again.")->with('status', 0);
			}
		}
	}
	public function search(Request $request)
	{
		if ($request->method() == 'GET') {

			$books = Book::where('id', '>', 0);
			$fields = ['title', 'author', "publication_date"];
			foreach ($fields as $field) {
				if (!empty($request->$field)) {
					$books = $books->where($field, "LIKE", "$request->$field");
				}
			}
			//if (!empty($request->author)) {
			//	$filtered = $books->where("author", 'LIKE', "%{$request->author}%");
			//}
			//if (!empty($request->title)) {
			//	$filtered = $books->where("title", 'LIKE', "%{$request->title}%");
			//}
			//if (!empty($request->pub_date)) {
			//	$filtered = $books->where("publication_date", '=', "{$request->pub_date}");
			//}

			return view("books.list", [
				"books" => $books->get()
			]);
		}
	}
}
