@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">{{ __('Search books') }}</div>

				<div class="card-body">
					@include('books.search_form')
				</div>
			</div>

			<div class="card">
				<div class="card-header">{{ __('List books') }}</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
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
									<td><a class='text-dark text-decoration-none' href='/books/{{ $book->id }}/detail'>{{ $book->title }}</a></td>
									<td><a class='text-dark text-decoration-none' href='/books/{{ $book->id }}/detail'>{{ $book->publication_date }}</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
