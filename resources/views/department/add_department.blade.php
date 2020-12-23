@extends('_layout')
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">
		
		{{-- employee table --}}
		<div class="row">
			<div class="col-sm-12">
				<div class="card dash-widget">
					<div class="card-body">
						<div class="col-md-12 text-center">
							<span class="modal-title">Add Department</span>
						</div>
						<form action="{{url('department')}}" method="POST">
							@csrf
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Department <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="department" value="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Department(kh)</label>
											<input class="form-control" type="text" name="department_kh" value="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-4"><label>Status <span class="text-danger">*</span></label></div>
											<div class="col-md-4"><input type="radio" name="status" value="t"> <label for="">Yes</label></div>
											<div class="col-md-4"><input type="radio" name="status" value="f"> <label for="">No</label></div>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<input type="submit" value="Save" class="btn btn-info">
										<a href="{{url('department')}}" class="btn btn-danger">Cancel</a>
									</div>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Content -->
@endsection