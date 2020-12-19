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
							<span class="modal-title">Add Module</span>
						</div>
						<form action="{{url('module')}}" method="POST">
							@csrf
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Icon</label>
											<input class="form-control" type="text" name="icon">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Parent ID</label>
											<select name="parent" id="" class="form-control">
												<option value="" hidden></option>
												@foreach ($parent as $paren)
													<option value="{{$paren->id}}">{{$paren->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Route</label>
											<input class="form-control" type="text" name="route">
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
										<a href="/module" class="btn btn-danger">Cancel</a>
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