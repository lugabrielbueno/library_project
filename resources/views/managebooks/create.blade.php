@extends('layouts.app')

@section('content')
<form action="/managebooks" method='post'>
	@csrf
	<div class='col-md-12'>
		<div class='table-scrollable'>
			<table class='table table-hover'>
				<tbody id='field_book'>
					<tr class='field_book'>
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
		<button id='add_field' onclick='addBookField()' type='button' class='btn btn-primary m-2' ><i class='fa fa-plus'></i></button>
		<button id='remove_field' onclick='removeBookField()' type='button' class='btn btn-secondary m-2' ><i class='fa fa-minus'></i></button>
	</div>
	<div class='col-md-6'>
		<div class='form-group'>
			<label class='control-label' for='reader'>Reader</label>
			<input class='form-control' name='reader' id='reader'>
		</div>
	</div>
	
</form>

@endsection
