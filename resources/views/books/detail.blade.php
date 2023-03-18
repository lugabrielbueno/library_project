@extends('layouts.app')

@section('content')
<div class='col-md-8'>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">{{ __('Detail book') }}</div>

					<div class="card-body">
						@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
						@endif

						<div class='row'>
							<div class='col-md-12'>
								<div class='form-group'>
									<label class='control-label' for='title'>Title</label>
									<input class='form-control' disabled placeholder='book title' required name='title' id='title' value='{{ $book->title }}'>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='form-group'>
									<label class='control-label' for='author'>Author</label>
									<input class='form-control' disabled placeholder='book author' required name='author' id='author' value='{{ $book->author}}'>
								</div>
							</div>
							<div class='col-md-2'>
								<div class='form-group'>
									<label class='control-label' for='pages'>Pages</label>
									<input class='form-control' type='number' min='1' required name='page' id='pages' value='{{ $book->pages }}' disabled>
								</div>
							</div>

							<div class='col-md-3'>
								<div class='form-group'>
									<label class='control-label' for='pub_date'>Publication date </label>
									<input class='form-control' type='date' name='pub_date' required id='pub_date' value='{{ $book->publication_date }}' disabled>
								</div>
							</div>
							<div class='col-md-3'>
								<div class='form-group'>
									<label class='control-label' for='edition_date'>Edition date </label>
									<input class='form-control' type='date' name='edition_date' required id='edition_date' value='{{ $book->edition_date }}' disabled>
								</div>
							</div>
							<div class='row'>
								<div class='col-md-12 p-2'>
									<a class='btn btn-secondary m-2' onclick='history.back()'><i class='fa fa-arrow-left'></i> Back</a>
									<a class='btn btn-warning m-2 ' style='color:white;' href="{{ url('/books/'.$book->id.'/edit') }}" name='update_book'><i class='fa fa-pen'></i> Edit</a>
									<a class='btn btn-danger m-2 ' style='color:white;' href="{{ url('/books/'.$book->id.'/delete') }}" name='delete_book'><i class='fa fa-times'></i> Delete</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
