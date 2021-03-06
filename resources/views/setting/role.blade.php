@extends('_layout')
@section('content')
	{{-- role delete --}}
	<div class="modal custom-modal fade" id="delete_module" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-header">
						<h3>Delete Holiday</h3>
						<p>Are you sure want to delete?</p>
					</div>
					<form action="" id="fm_delete_module" method="POST">
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
	{{-- end role delete --}}
    <!-- Page Content -->
    <div class="content container-fluid">
		@include('message.message')
		{{-- employee table --}}
		<div class="row">
			<div class="col-sm-12">
				<div class="card dash-widget">
					<div class="card-body">
						<div class="co-md-12 text-right">
							<a href="{{url('role/create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add Role</a>
						</div>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr role="row">
										<th>Name</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($role as $rol)
										<tr role="row">
											<td>{{$rol->name}}</td>
											<td class="">@if ($rol->status==1)
												True
											@else
												False
											@endif</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="/role/{{$rol->id}}/edit"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);" onclick="delete_modal_module({{$rol->id}})"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
		function delete_modal_module(id){
			$('#delete_module').modal('show');
			$('#fm_delete_module').attr('action', '{{url("module")}}/'+id);
		}
		
	</script>
@endsection