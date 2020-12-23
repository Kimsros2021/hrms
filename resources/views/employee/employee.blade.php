@extends('_layout')
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa fa-male"></i></span>
						<div class="dash-widget-info">
							<h3>112</h3>
							<span>Male</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa fa-female"></i></span>
						<div class="dash-widget-info">
							<h3>44</h3>
							<span>Female</span>
						</div>
					</div>
				</div>
			</div>
		</div>


		{{-- employee table --}}
		<div class="row">
			<div class="col-sm-12">
				<div class="card dash-widget">
					<div class="card-body">
						<div class="co-md-12 text-right">
							<a href="{{url('employee/create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add Employee</a>
						</div>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr role="row">
										<th>Name</th>
										<th>Employee ID</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Join Date</th>
										<th>Role</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr role="row">
										<td class="sorting_1">
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
												<a href="profile.html">Bernardo Galaviz <span>Web Developer</span></a>
											</h2>
										</td>
										<td>FT-0007</td>
										<td>bernardogalaviz@example.com</td>
										<td>9876543210</td>
										<td class="">1 Jan 2013</td>
										<td class="">
											<div class="dropdown">
												<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
												<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
													<a class="dropdown-item" href="#">Software Engineer</a>
													<a class="dropdown-item" href="#">Software Tester</a>
													<a class="dropdown-item" href="#">Frontend Developer</a>
													<a class="dropdown-item" href="#">UI/UX Developer</a>
												</div>
											</div>
										</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr role="row">
										<td class="sorting_1">
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
												<a href="profile.html">Bernardo Galaviz <span>Web Developer</span></a>
											</h2>
										</td>
										<td>FT-0007</td>
										<td>bernardogalaviz@example.com</td>
										<td>9876543210</td>
										<td class="">1 Jan 2013</td>
										<td class="">
											<div class="dropdown">
												<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
												<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
													<a class="dropdown-item" href="#">Software Engineer</a>
													<a class="dropdown-item" href="#">Software Tester</a>
													<a class="dropdown-item" href="#">Frontend Developer</a>
													<a class="dropdown-item" href="#">UI/UX Developer</a>
												</div>
											</div>
										</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr role="row">
										<td class="sorting_1">
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
												<a href="profile.html">Bernardo Galaviz <span>Web Developer</span></a>
											</h2>
										</td>
										<td>FT-0007</td>
										<td>bernardogalaviz@example.com</td>
										<td>9876543210</td>
										<td class="">1 Jan 2013</td>
										<td class="">
											<div class="dropdown">
												<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
												<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
													<a class="dropdown-item" href="#">Software Engineer</a>
													<a class="dropdown-item" href="#">Software Tester</a>
													<a class="dropdown-item" href="#">Frontend Developer</a>
													<a class="dropdown-item" href="#">UI/UX Developer</a>
												</div>
											</div>
										</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Content -->
@endsection