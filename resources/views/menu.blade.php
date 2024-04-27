
<a href="/" class="d-flex align-items-center pb-3 mb-3 link text-decoration-none border-bottom">
	<span class="fs-5 fw-semibold span-text">Library</span>
</a>
<ul class="list-unstyled ">
	<li class="mb-1">
		<button name='btn-books' type='button' style='width:100%;text-align:left;' class="btn btn text-left" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
			Books
			<i class='fa fa-angle-right'></i>
		</button>
		<div class="collapse " id="home-collapse">
			<ul class="btn-toggle-nav list-unstyled ">
				<li><a href="/books" style='width:100%;text-align:left' class="link btn btn-light "><i class='fa fa-circle'></i> List all</a></li>
				<li><a href="/books/create" style='width:100%;text-align:left' class="link btn btn-light "><i class='fa fa-circle'></i> Register new </a></li>
				<li><a href="#" style='width:100%;text-align:left' class="link btn btn-light "><i class='fa fa-circle'></i> Books in use</a></li>
				<li><a href="#" style='width:100%;text-align:left' class="link btn btn-light "><i class='fa fa-circle'></i> Book in</a></li>
				<li><a href="/managebooks/create" style='width:100%;text-align:left' class="link btn btn-light "><i class='fa fa-circle'></i> Book out</a></li>
			</ul>
		</div>
	</li>
	<li class="mb-1">
		<button name='btn-books' style='width:100%;text-align:left;' class="btn btn  collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
			Readers
			<i class='fa fa-angle-right'></i>
		</button>
		<div class="collapse" id="dashboard-collapse">
			<ul class="btn-toggle-nav list-unstyled  small">
				<li><a href="/readers/create" style='width:100%;text-align:left;' class="link  btn btn-light  "><i class='fa fa-circle'></i> Register new reader</a></li>
				<li><a href="/readers" style='width:100%;text-align:left;' class="link  btn btn-light "><i class='fa fa-circle'></i> Search reader</a></li>
			</ul>
		</div>
	</li>
	<li class="border-top my-3"></li>
	<li class="mb-1">
		<button name='btn-books' style='width:100%;text-align:left;' class="btn btn  collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
			Account
			<i class='fa fa-angle-right'></i>
		</button>
		<div class="collapse" id="account-collapse">
			<ul class="btn-toggle-nav list-unstyled ">
				<li><a href="#" style='width:100%;text-align:left' class="link btn btn-light "><i class='fa fa-circle'></i> New...</a></li>
				<li><a href="#" style='width:100%;text-align:left' class="link btn btn-light "> Profile</a></li>
				<li><a href="#" style='width:100%;text-align:left' class="link btn btn-light "> Settings</a></li>
				<li><a href="#" style='width:100%;text-align:left' class="link btn btn-light "> Sign out</a></li>
			</ul>
		</div>
	</li>
</ul>
