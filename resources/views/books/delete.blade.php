@extends('layouts.app')

@section('content')
<div class='col-md-8'>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">{{ __('Delete book') }}</div>

					<div class="card-body">

						<form method='POST' action='/books/{{ $book->id }}'>
							@csrf
							@method('DELETE')
							<div class='row'>
								<h4>
									Are you sure you want to delete the book <strong>{{ $book->title }}</strong> ?
								</h4>
								<div class='col-md-12 p-2'>
									<a class='btn btn-secondary m-2' href='/books/{{$book->id}}/detail'><i class='fa fa-arrow-left'></i> Back</a>
									<button type='submit' class='btn btn-danger m-2 ' style='color:white;'><i class='fa fa-times'></i> Delete</button>
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
