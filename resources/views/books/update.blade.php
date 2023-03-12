@extends('layouts.app')

@section('content')
<div class='col-md-8'>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">{{ __('Edit book') }}</div>

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

						<form method='POST' action="/books/{{$book->id}}/edit">
							@csrf
							<div class='row'>
								<div class='col-md-12'>
									<div class='form-group'>
										<label class='control-label' for='title'>Title</label>
										<input class='form-control' placeholder='book title' required name='title' id='title' value='{{ $book->title }}'>
									</div>
								</div>
								<div class='col-md-12'>
									<div class='form-group'>
										<label class='control-label' for='author'>Author</label>
										<input class='form-control' placeholder='book author' required name='author' id='author' value='{{ $book->author}}'>
									</div>
								</div>
								<div class='col-md-2'>
									<div class='form-group'>
										<label class='control-label' for='pages'>Pages</label>
										<input class='form-control' type='number' min='1' required name='pages' id='pages' value='{{ $book->pages }}'>
									</div>
								</div>

								<div class='col-md-3'>
									<div class='form-group'>
										<label class='control-label' for='pub_date'>Publication date </label>
										<input class='form-control' type='date' name='pub_date' required id='pub_date' value='{{ $book->publication_date }}'>
									</div>
								</div>
								<div class='col-md-3'>
									<div class='form-group'>
										<label class='control-label' for='edition_date'>Edition date </label>
										<input class='form-control' type='date' name='edition_date' required id='edition_date' value='{{ $book->edition_date }}'>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-12 p-2'>
										<a class='btn btn-secondary m-2' href='/books/{{ $book->id }}/detail'><i class='fa fa-arrow-left'></i> Back</a>
										<button class='btn btn-success m-2 ' style='color:white;' type='submit' name='update_book'><i class='fa fa-check'></i> Update</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
