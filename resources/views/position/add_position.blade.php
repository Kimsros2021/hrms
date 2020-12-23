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
							<span class="modal-title">Add Position</span>
						</div>
						<form action="{{url('position')}}" method="POST">
							@csrf
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Position <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="position">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Position(kh)</label>
											<input class="form-control" type="text" name="position_kh">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Department</label>
											<select name="department_id" id="" class="form-control">
												<option value="" hidden></option>
												@foreach ($department as $dept)
													<option value="{{$dept->id}}">{{$dept->name}}/{{$dept->name_kh}}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-4 form-group"><label>Status <span class="text-danger">*</span></label></div>
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4"><input type="radio" name="status" value="t"> <label for="">Yes</label></div>
											<div class="col-md-4"><input type="radio" name="status" value="f"> <label for="">No</label></div>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<input type="submit" value="Save" class="btn btn-info">
										<a href="{{url('position')}}" class="btn btn-danger">Cancel</a>
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