@extends('layouts.app')

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header">{{ __('Search readers') }}</div>
		<div class="card-body">
			@include('readers.search_form')
		</div>
	</div>
	<div class="card">
		<div class="card-header">{{ __('List readers') }}</div>
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

			@if (empty($readers))
			{{ __('No readers found.')}}
			@else


			<div class='table-scrollable'>
				<table class='table table-hover'>
					<thead>
						<tr>
							<th>Reader</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						@foreach($readers as $reader)
						<tr>
							<td><a class='text-dark text-decoration-none' href='/readers/{{ $reader->id }}'>{{ $reader->name }}</a></td>
							<td><a class='text-dark text-decoration-none' href='/readers/{{ $reader->id }}'>{{ $reader->email }}</a></td>
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
