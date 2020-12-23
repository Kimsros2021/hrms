@extends('_layout')
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">
		
		{{-- employee table --}}
		<div class="row">
			<div class="col-sm-12">
				<div class="card dash-widget">
					<div class="card-body">
						<div class="col-md-12 text-center" style="margin-bottom: 20px">
							<span class="modal-title">Add Employee</span>
						</div>
                        <form action="{{url('employee')}}" method="POST">
                            @csrf
							<div class="row">
								<div class="col-md-12">
									<div class="row">
                                        <div class="col-md-3">
                                            <div class="profile-img-wrap edit-img">
                                                <img class="inline-block" src="{{url('img/ceo.jpg')}}" alt="user">
                                                <div class="fileupload btn">
                                                    <span class="btn-text">Profile</span>
                                                    <input class="upload" type="file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>First Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="" name="first_name_en">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Last Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="" name="last_name_en">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="kh">នាមត្រកូល <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="" name="first_name_kh">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>នាមខ្លួន <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="" name="last_name_kh">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ID Number <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="" name="id_number">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender <span class="text-danger">*</span></label>
                                                <select class="form-control" name="gender">
                                                    <option value="" hidden></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Date of Birth <span class="text-danger">*</span></label>
												<input type="date" class="form-control" name="date_of_birth">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Join Date <span class="text-danger">*</span></label>
												<input type="date" class="form-control" name="join_date">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Department <span class="text-danger">*</span></label>
												<select class="form-control" name="department">
													<option value="" hidden></option>
													<option value="1">IDT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Position <span class="text-danger">*</span></label>
												<select class="form-control" name="position">
													<option value="" hidden></option>
													<option value="female">Junir Programmer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Telephone <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="telephone">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Office Phone</label>
												<input type="text" class="form-control" name="office_phone">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Gmail <span class="text-danger">*</span></label>
												<input type="email" class="form-control" name="gmail">
                                            </div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-12 text-right">
                                <input type="submit" value="Save" class="btn btn-info">
                                <a href="" class="btn btn-danger">Cancel</a>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Content -->
@endsection