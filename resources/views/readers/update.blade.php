@extends('layouts.app')

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header">{{ __('Edit reader') }}</div>

		<div class="card-body">
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('message') }}
			</div>
			@endif
			@if ($errors->any())
			<div class='alert alert-danger' role='alert'>
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif


			<form method='POST' action='/readers/{{$reader->id}}'>
				@csrf
				@method("PUT")
				<div class='row'>
					<div class='col-md-12'>
						<div class='form-group'>
							<label class='control-label' for='complete_name'>Complete Name <span class='required'>*</span></label>
							<input class='form-control' value='{{ $reader->name }}' placeholder='reader name' required name='complete_name' id='complete_name'>
						</div>
					</div>
					<div class='col-md-12'>
						<div class='form-group'>
							<label class='control-label' for='phone'>Phone </label>
							<input class='form-control' value='{{ $reader->phone }}' name='phone' id='phone'>
						</div>
					</div>
					<div class='col-md-4'>
						<div class='form-group'>
							<label class='control-label' for='email'>Email <span class='required'>*</span></label>
							<input class='form-control' type='email' value='{{ $reader->email }}' required name='email' id='email'>
						</div>
					</div>
					<div class='col-md-3'>
						<div class='form-group'>
							<label class='control-label' for='address'>Address</label>
							<input class='form-control' value='{{ $reader->address }}' type='text' name='address' id='address'>
						</div>
					</div>
					<div class='col-md-3'>
						<div class='form-group'>
							<label class='control-label' for='number'>Number</label>
							<input class='form-control' value='{{ $reader->number }}' type='text' name='number' id='number'>
						</div>
					</div>
					<div class='col-md-3'>
						<div class='form-group'>
							<label class='control-label' for='postal_code'>Postal Code</label>
							<input class='form-control' value='{{ $reader->postal_code }}' type='text' name='postal_code' id='postal_code'>
						</div>
					</div>
					<div class='col-md-3'>
						<div class='form-group'>
							<label class='control-label' for='city'>City</label>
							<input class='form-control' value='{{ $reader->city }}' type='text' name='city' id='city'>
						</div>
					</div>
					<div class='col-md-3'>
						<div class='form-group'>
							<label class='control-label' for='state'>State</label>
							<input class='form-control' value='{{ $reader->state }}' type='state' name='state' id='state'>
						</div>
					</div>
					<div class='row'>
						<div class='col-md-12 p-2'>
							<a class='btn btn-secondary m-2' onclick='history.back()'><i class='fa fa-arrow-left'></i> Back</a>
							<button class='btn btn-success m-2 ' type='submit' name='save_reader'><i class='fa fa-check'></i> Save</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
