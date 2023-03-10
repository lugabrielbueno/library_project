@extends('layouts.app')

@section('content')
<div class='col-md-8'>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">{{ __('New book') }}</div>

					<div class="card-body">
						@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
						@endif

						<form method='POST' action='/books/create'>
							<div class='row'>
								<div class='col-md-12'>
									<div class='form-group'>
										<label class='control-label' for='title'>Title <span class='required'>*</span></label>
										<input class='form-control' placeholder='book title' required name='title' id='title'>
									</div>
								</div>
								<div class='col-md-12'>
									<div class='form-group'>
										<label class='control-label' for='author'>Author <span class='required'>*</span></label>
										<input class='form-control' placeholder='book author' required name='author' id='author'>
									</div>
								</div>
								<div class='col-md-2'>
									<div class='form-group'>
										<label class='control-label' for='pages'>Pages <span class='required'>*</span></label>
										<input class='form-control' type='number' min='1' required name='page' id='pages'>
									</div>
								</div>

								<div class='col-md-3'>
									<div class='form-group'>
										<label class='control-label' for='pub_date'>Publication date <span class='required'>*</span></label>
										<input class='form-control' type='date' name='pub_date' required id='pub_date'>
									</div>
								</div>
								<div class='col-md-3'>
									<div class='form-group'>
										<label class='control-label' for='edition_date'>Edition date <span class='required'>*</span></label>
										<input class='form-control' type='date' name='edition_date' required id='edition_date'>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-12 p-2'>
										<a class='btn btn-secondary m-2' onclick='history.back()'><i class='fa fa-arrow-left'></i> Back</a>
										<button class='btn btn-success m-2 ' type='submit' name='save_book'><i class='fa fa-check'></i> Save</button>
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
