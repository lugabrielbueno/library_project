<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reader;

class ReadersController extends Controller
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
		return view('readers.create');
	}


	/**
	 * Create a new reader on database
	 */
	public function store(Request $request)

	{
		if ($request->method() == 'POST') {
			$request->validate([
				'complete_name' => ['required', 'max:255'],
				'email' => ['required', 'email', 'unique:readers']
			]);

			$reader = new Reader();
			$reader->name = $request->input('complete_name');
			$reader->register_date = date('Y-m-d');
			$reader->address = $request->input('address');
			$reader->email = $request->input('email');
			$reader->postal_code = $request->input('postal_code');
			$reader->city = $request->input('city');
			$reader->state = $request->input('state');
			$reader->number = $request->input('number');
			$reader->phone = $request->input('phone');

			$response = $reader->save();
			if ($response) {
				return redirect("/readers/create")->with('message', "Reader created successfully ! ")->with('status', 1);
			} else {
				return redirect("/readers/create")->with('message', "Failed to create reader, try again.")->with('status', 0);
			}
		} else {
			return view('readers.create');
		}
	}


	public function show($reader)
	{
		$reader = Reader::find($reader);
		return view('readers.detail', [
			'reader' => $reader
		]);
	}

	public function edit($reader)
	{
		$reader = Reader::find($reader);
		return view('readers.update', [
			"reader" => $reader
		]);
	}


	public function delete($reader)
	{
		$reader = Reader::find($reader);
		return view('readers.delete', [
			"reader" => $reader
		]);
	}


	public function destroy(Request $request, $reader_id)
	{
		$reader = Reader::find($reader_id);
		if ($request->method() == 'DELETE') {

			$response = $reader->delete();
			if ($response) {
				return redirect("/readers")->with('message', "Reader deleted successfully ! ")->with('status', 1);
			} else {
				return redirect("/readers/{$reader_id}/detail")->with('message', "Failed to deleted reader, try again.")->with('status', 0);
			}
		}
	}

	public function list()
	{

		$readers = Reader::all();
		return view("readers.list", [
			'readers' => $readers
		]);
	}

	public function update(Request $request, $reader_id)
	{
		$reader = Reader::find($reader_id);
		if ($request->method() == 'PUT') {
			$request->validate([
				'complete_name' => ['required', 'max:255'],
				'email' => ['required', 'email', 'unique:readers']
			]);



			$reader->name = $request->input('complete_name');
			$reader->address = $request->input('address');
			$reader->email = $request->input('email');
			$reader->city = $request->input('city');
			$reader->postal_code = $request->input('postal_code');
			$reader->state = $request->input('state');
			$reader->number = $request->input('number');
			$reader->phone = $request->input('phone');

			$response = $reader->save();
			if ($response) {
				return redirect("/readers/{$reader_id}/edit")->with('message', "Reader updated successfully ! ")->with('status', 1);
			} else {
				return redirect("/readers/{$reader_id}/edit")->with('message', "Failed to update reader, try again.")->with('status', 0);
			}
		}
	}
	public function search(Request $request)
	{
		if ($request->method() == 'GET') {

			$readers_query = Reader::query();
			if ($request->filled('name')) {
				$readers_query->where('name', "LIKE", "%$request->name%");
			}
			if ($request->filled('email')) {

				$readers_query->where('email', "LIKE", "%$request->email%");
			}
			if ($request->filled('address')) {
				$readers_query->where('address',  "LIKE", "%$request->address%");
			}
			if ($request->filled('state')) {
				$readers_query->where('state', "LIKE", "%$request->state%");
			}

			if ($request->filled('city')) {
				$readers_query->where('city', "LIKE", "%$request->city%");
			}
			if ($request->filled('number')) {
				$readers_query->where('number',  $request->number);
			}

			return view("readers.list", [
				"readers" => $readers_query->get()
			]);
		}
	}

	//
}
