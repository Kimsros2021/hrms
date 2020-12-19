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
							<span class="modal-title">Edit Module</span>
                        </div>
                        {{-- {{url('module/$module[0]->id')}} --}}
						<form action="{{url('module',[$module[0]->id])}}" method="POST">
                            @csrf
                            @method('PUT')
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="name" value="{{$module[0]->name ?? ''}}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Icon</label>
											<input class="form-control" type="text" name="icon" value="{{$module[0]->icon ?? ''}}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Parent ID</label>
											<select name="parent" id="" class="form-control">
												<option value="" hidden></option>
												@foreach ($parent as $paren)
													@if ($paren->id==$module[0]->parent_id)
														<option selected value="{{$paren->id}}">{{$paren->name}}</option>
													@else
														<option value="{{$paren->id}}">{{$paren->name}}</option>
													@endif
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Route</label>
											<input class="form-control" type="text" name="route" value="{{$module[0]->route ?? ''}}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-4"><label>Status <span class="text-danger">*</span></label></div>
											<div class="col-md-4"><input type="radio" name="status" value="t" @if ($module[0]->status==true)
                                                checked
                                            @endif> <label for="">Yes</label></div>
											<div class="col-md-4"><input type="radio" name="status" value="f" @if ($module[0]->status==false)
                                                checked
                                            @endif> <label for="">No</label></div>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<input type="submit" value="Update" class="btn btn-info">
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