@extends('layouts.app')

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header">{{ __('New reader') }}</div>
		<div class="card-body">
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('message') }}
			</div>
			@endif
			<div class='row'>
				<div class='col-md-12'>
					<div class='form-group'>
						<label class='control-label' for='complete_name'>Complete Name </label>
						<input class='form-control' value='{{ $reader->name }}' readonly placeholder='reader name' required name='complete_name' id='complete_name'>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='form-group'>
						<label class='control-label' for='phone'>Phone </label>
						<input class='form-control' value='{{ $reader->phone }}' readonly name='phone' id='phone'>
					</div>
				</div>
				<div class='col-md-2'>
					<div class='form-group'>
						<label class='control-label' for='email'>Email</label>
						<input class='form-control' type='email' readonly value='{{ $reader->email }}' required name='email' id='email'>
					</div>
				</div>
				<div class='col-md-3'>
					<div class='form-group'>
						<label class='control-label' for='address'>Address</label>
						<input class='form-control' value='{{ $reader->address }}' readonly type='text' name='address' id='address'>
					</div>
				</div>
				<div class='col-md-3'>
					<div class='form-group'>
						<label class='control-label' for='number'>Number</label>
						<input class='form-control' value='{{ $reader->number }}' readonly type='text' name='number' id='number'>
					</div>
				</div>
				<div class='col-md-3'>
					<div class='form-group'>
						<label class='control-label' for='postal_code'>Postal Code</label>
						<input class='form-control' value='{{ $reader->postal_code }}' readonly type='text' name='postal_code' id='postal_code'>
					</div>
				</div>
				<div class='col-md-3'>
					<div class='form-group'>
						<label class='control-label' for='city'>City</label>
						<input class='form-control' value='{{ $reader->city }}' type='text' readonly name='city' id='city'>
					</div>
				</div>
				<div class='col-md-3'>
					<div class='form-group'>
						<label class='control-label' for='state'>State</label>
						<input class='form-control' value='{{ $reader->state }}' type='state' readonly name='state' id='state'>
					</div>
				</div>
				<div class='row'>
					<div class='col-md-12 p-2'>
						<a class='btn btn-secondary m-2' onclick='history.back()'><i class='fa fa-arrow-left'></i> Back</a>
						<a class='btn btn-warning m-2 ' style='color:white' href='/readers/{{$reader->id}}/edit'><i class='fa fa-pen'></i> Edit</a>
						<a class='btn btn-danger m-2 ' href='/reader/{{$reader->id}}/delete'><i class='fa fa-times'></i> Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
