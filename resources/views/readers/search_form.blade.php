	<form action='/readers/search' method='GET'>
		@csrf
		<div class='row'>
			<div class='col-md-7'>
				<div class='form-group'>
					<label class='control-label'>Name</label>
					<input class='form-control' name='name' id='name'>
				</div>
			</div>
			<div class='col-md-5'>
				<div class='form-group'>
					<label class='control-label'>Email</label>
					<input class='form-control' name='email' id='email'>
				</div>
			</div>
			<div class='col-md-5'>
				<div class='form-group'>
					<label class='control-label'>Address</label>
					<input class='form-control' name='address' id='address'>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='form-group'>
					<label class='control-label'>City</label>
					<input class='form-control' type='text' name='city' id='city'>
				</div>
			</div>
			<div class='col-md-2'>
				<div class='form-group'>
					<label class='control-label'>State</label>
					<input class='form-control' type='state' name='state' id='state'>
				</div>
			</div>
			<div class='col-md-12'>
				<button class='btn btn-primary m-3' name='search_reader'><i class='fa fa-search'></i> Search</button>
			</div>
		</div>
	</form>
