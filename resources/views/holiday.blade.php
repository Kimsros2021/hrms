@extends('_layout')
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">
        {{-- employee table --}}
		<div class="row">
			<div class="col-sm-12">
				<div class="card dash-widget">
					<div class="card-body">
						<div class="co-md-12 text-right">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_holiday"><i class="fa fa-plus"></i> Add Holiday</a>
						</div>
						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0">
								<thead>
									<tr>
										<th>#</th>
										<th>Title </th>
										<th>Holiday Date</th>
										<th>Day</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr class="holiday-upcoming">
										<td>6</td>
										<td>Bakrid</td>
										<td>2 Sep 2019</td>
										<td>Saturday</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr class="holiday-upcoming">
										<td>6</td>
										<td>Bakrid</td>
										<td>2 Sep 2019</td>
										<td>Saturday</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr class="holiday-upcoming">
										<td>6</td>
										<td>Bakrid</td>
										<td>2 Sep 2019</td>
										<td>Saturday</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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