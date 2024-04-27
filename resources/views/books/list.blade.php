@extends('layouts.app')

@section('content')

<div class='col-md-12'>
<div class="card ">
		<div class="card-header">{{ __('Search books') }}</div>
		<div class="card-body">
			@include('books.search_form')
		</div>
	</div>
	<div class="card card-table">
		<div class="card-header">{{ __('List books') }}</div>
		<div class="card-body">
			@if (session('status') == 1 and session()->has('message'))
			<div class="alert alert-success" role="alert">
				{{ session()->get('message') }}
			</div>
			@endif
			@if (session('status') == 0 and session()->has('message'))
			<div class="alert alert-warning" role="alert">
				{{ session()->get('message') }}
			</div>
			@endif

			@if (empty($books))
			{{ __('No books found.')}}
			@else
			<div class='table-scrollable'>
				<table class='table table-hover'>
					<thead>
						<tr>
							<th>Title</th>
							<th>Publication date</th>
						</tr>
					</thead>
					<tbody>
						@foreach($books as $book)
						<tr>
							<td><a class=' text-decoration-none' href='/books/{{ $book->id }}'>{{ $book->title }}</a></td>
							<td><a class='text-decoration-none' href='/books/{{ $book->id }}'>{{ $book->publication_date }}</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection
