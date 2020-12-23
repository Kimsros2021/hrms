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
							<a href="{{url('position/create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add Position</a>
						</div>
						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0">
								<thead>
									<tr>
										<th>#</th>
										<th>Position </th>
										<th>Khmer Name</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($position as $posit)
										<tr class="holiday-upcoming">
											<td>1</td>
											<td>{{$posit->name ?? ''}}</td>
											<td>{{$posit->name_kh ?? ''}}</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="{{url('position/'.$posit->id.'/edit')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
									@endforeach
									
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