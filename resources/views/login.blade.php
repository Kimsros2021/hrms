<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>HRMS</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="asset/template/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="asset/template/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="asset/template/css/style.css">
        <style></style>
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				{{-- <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a> --}}
				<div class="container">
				
					<!-- Account Logo -->
					{{-- <div class="account-logo">
						<a href="index.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div> --}}
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper shadow">
							<div class="account-logo">
                                <a href="https://turbotech.com"><img src="img/turbotech.png" alt="Dreamguy's Technologies"></a>
                            </div>
							
							<!-- Account Form -->
							<form action="{{url('dashboard')}}" method="POST">
								@csrf
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" type="text" autocomplete="off">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
									</div>
									<input class="form-control" type="password" autocomplete="off">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Login</button>
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="asset/template/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="asset/template/js/popper.min.js"></script>
        <script src="asset/template/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="asset/template/js/app.js"></script>
		
    </body>
</html>