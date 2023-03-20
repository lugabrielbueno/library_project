@extends('layouts.app')

@section('content')
<form action="/managebooks" method='post'>
	@csrf
	<div class='col-md-12'>
		<div class='table-scrollable'>
			<table class='table table-hover'>
				<tbody>
					<tr>
						<th>Book Title</th>
						<td>
							<select class='form-control select2me' name='book' id='book'>
								<option style="color:rgb('190,190,190')">Type the title or the author ...</option>
								@foreach ($books as $book)
								<option value='{{$book->id}}'>{{$book->title}}</option>
								@endforeach
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class='col-md-12'>
		<button type='' class='btn btn-primary m-2' onclick='addBookField()'><i class='fa fa-plus'></i></button>
		<button type='' class='btn btn-secondary m-2' onclick='removeBookFileld()'><i class='fa fa-minus'></i></button>
	</div>
	<div class='col-md-6'>
		<div class='form-group'>
			<label class='control-label' for='reader'>Reader</label>
			<input class='form-control' name='reader' id='reader'>
		</div>
	</div>
</form>
@endsection
