<div class='col-md-8'>
	<form action='/books' method='GET'>
		@csrf
		<div class='row'>
			<div class='col-md-7'>
				<div class='form-group'>
					<label class='control-label'>Title</label>
					<input class='form-control' name='title' id='title'>
				</div>
			</div>
			<div class='col-md-5'>
				<div class='form-group'>
					<label class='control-label'>Author</label>
					<input class='form-control' name='author' id='author'>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='form-group'>
					<label class='control-label'>Publication date</label>
					<input class='form-control' type='date' name='publication_date' id='publication_date'>
				</div>
			</div>
			<div class='col-md-12'>
				<button class='btn btn-primary m-3' name='search_book'><i class='fa fa-search'></i> Search</button>
			</div>
		</div>
	</form>
</div>
