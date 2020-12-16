@extends('_layout')
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">
        <div class="card dash-widget">
			<div class="card-body">
                <div class="row">
            
                    <div class="col-md-6 offset-md-3">
                        <form>
                            <div class="form-group">
                                <label>Old password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>New password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!-- /Page Content -->
@endsection