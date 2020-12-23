@extends('_layout')
@section('content')
{{-- modal delete --}}
	<div class="modal custom-modal fade" id="delete_department" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-header">
						<h3>Delete Department</h3>
						<p>Are you sure want to delete?</p>
					</div>
					<form action="" id="fm_delete_department" method="POST">
						@csrf
						@method('DELETE');
						<input type="hidden" value="" id="id_module">
						<div class="modal-btn delete-action">
							<div class="row">
								<div class="col-6">
									<input type="submit" value="Delete" class="btn btn-primary continue-btn" style="width: 100%">
									
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
								</div>
							</div>
						</div>
					</form>
					
					
				</div>
			</div>
		</div>
	</div>
	{{-- end modal delete --}}
    <!-- Page Content -->
    <div class="content container-fluid">
        {{-- employee table --}}
		<div class="row">
			<div class="col-sm-12">
				<div class="card dash-widget">
					<div class="card-body">
						<div class="co-md-12 text-right">
							<a href="{{url('department/create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add Department</a>
						</div>
						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0">
								<thead>
									<tr>
										<th>#</th>
										<th>Department </th>
										<th>Khmer Name</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($department as $dept)
										<tr class="holiday-upcoming">
											<td>1</td>
											<td>{{$dept->name ?? ''}}</td>
											<td>{{$dept->name_kh ?? ''}}</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="{{url('department/'.$dept->id.'/edit')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_holiday" onclick="delete_modal_department({{$dept->id ?? 0}})"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
	<script>
		function delete_modal_department(id){
			$('#delete_department').modal('show');
			$('#fm_delete_department').attr('action', '{{url("department")}}/'+id);
		}
		
	</script>
@endsection