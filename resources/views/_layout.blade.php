<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 03:17:32 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>HRMS</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('asset/template/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('asset/font-awesome-4.7.0/css/font-awesome.min.css')}}">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{asset('asset/template/css/morris.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('asset/template/css/style.css')}}">
	
		
    </head>
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left shadow">
                    <a href="https://turbotech.com" class="logo">
						<img src="{{asset('img/logo.png')}}" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>TURBOTECH</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
					<!-- Flag -->
					{{-- <li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="https://dreamguys.co.in/smarthr/blue/assets/img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="https://dreamguys.co.in/smarthr/blue/assets/img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="https://dreamguys.co.in/smarthr/blue/assets/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="https://dreamguys.co.in/smarthr/blue/assets/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="https://dreamguys.co.in/smarthr/blue/assets/img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li> --}}
					<!-- /Flag -->
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="https://dreamguys.co.in/smarthr/blue/activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-09.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-02.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-03.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-05.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="https://dreamguys.co.in/smarthr/blue/chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-08.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="https://dreamguys.co.in/smarthr/blue/chat.html">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="https://dreamguys.co.in/smarthr/blue/assets/img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Kimsros</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="https://dreamguys.co.in/smarthr/blue/profile.html">My Profile</a>
							<a class="dropdown-item" href="https://dreamguys.co.in/smarthr/blue/settings.html">Settings</a>
							<a class="dropdown-item" href="https://dreamguys.co.in/smarthr/blue/login.html">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="https://dreamguys.co.in/smarthr/blue/profile.html">My Profile</a>
						<a class="dropdown-item" href="https://dreamguys.co.in/smarthr/blue/settings.html">Settings</a>
						<a class="dropdown-item" href="https://dreamguys.co.in/smarthr/blue/login.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							@foreach ($menu['menu'] as $mnu)
								@if (count($menu['sub_menu'][$mnu->name]))
								 	<li class="submenu">
										<a href="#">{!! $mnu->icon !!} <span>{{$mnu->name}}</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
									 		@foreach ($menu['sub_menu'][$mnu->name] as $sub_menu)
												<li><a href="{{$sub_menu->route}}">{{$sub_menu->name}}</a></li>
											@endforeach
									 	</ul>
									</li>
									 
								@else
									 <li>
										<a href="{{$mnu->route}}" class="active">{!! $mnu->icon !!} <span>{{$mnu->name}}</span></a>
									</li>
								@endif
							@endforeach


							{{-- <li class="active">
								<a href="/dashboard" class="active"><i class="fa fa-dashboard"></i> <span> Dashboard</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="#">Chat</a></li>
									<li class="submenu">
										<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="#">Voice Call</a></li>
											<li><a href="#">Video Call</a></li>
											<li><a href="#">Outgoing Call</a></li>
											<li><a href="#">Incoming Call</a></li>
										</ul>
									</li>
									<li><a href="#">Calendar</a></li>
									<li><a href="#">Contacts</a></li>
									<li><a href="#">Email</a></li>
									<li><a href="#">File Manager</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-user"></i> <span> Recruitment</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/candidate">Candidate</a></li>
									<li><a href="/question">Question</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#" class="noti-dot"><i class="fa fa-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/employee">Employee</a></li>
									<li><a href="/holiday">Holidays</a></li>
									<li><a href="/attendance">Attendance<span class="badge badge-pill bg-primary float-right">1</span></a></li>
									<li><a href="/mission">Mission</a></li>
									<li><a href="/department">Department</a></li>
									<li><a href="/position">Position</a></li>
									<li><a href="/overtime">Overtime</a></li>
									<li><a href="/warning_and_punishment">Warning && Punishment</a></li>
									<li><a href="resigned_employee">Resigned Employee</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-user"></i> <span> Shift Promote</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="#">Promote</a></li>
									<li><a href="#">History</a></li>
								</ul>
							</li>
							<li> 
								<a href="#"><i class="fa fa-users"></i> <span>Clients</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="#">Projects</a></li>
									<li><a href="#">Tasks</a></li>
									<li><a href="#">Task Board</a></li>
								</ul>
							</li>
							<li> 
								<a href="#"><i class="fa fa-user-secret"></i> <span>Leads</span></a>
							</li>
							<li> 
								<a href="#"><i class="fa fa-ticket"></i> <span>Tickets</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="#">Estimates</a></li>
									<li><a href="">Invoices</a></li>
									<li><a href="">Payments</a></li>
									<li><a href="">Expenses</a></li>
									<li><a href="">Provident Fund</a></li>
									<li><a href="">Taxes</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Employee Salary </a></li>
									<li><a href=""> Payslip </a></li>
									<li><a href=""> Payroll Items </a></li>
								</ul>
							</li>
							<li> 
								<a href=""><i class="fa fa-file-pdf-o"></i> <span>Policies</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Expense Report </a></li>
									<li><a href=""> Invoice Report </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Performance Indicator </a></li>
									<li><a href=""> Performance Review </a></li>
									<li><a href=""> Performance Appraisal </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Goal List </a></li>
									<li><a href=""> Goal Type </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Training List </a></li>
									<li><a href=""> Trainers</a></li>
									<li><a href=""> Training Type </a></li>
								</ul>
							</li>
							<li><a href=""><i class="fa fa-bullhorn"></i> <span>Promotion</span></a></li>
							<li><a href=""><i class="fa fa-external-link-square"></i> <span>Resignation</span></a></li>
							<li><a href=""><i class="fa fa-times-circle"></i> <span>Termination</span></a></li>
							<li> 
								<a href=""><i class="fa fa-object-ungroup"></i> <span>Assets</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Manage Jobs </a></li>
									<li><a href=""> Applied Candidates </a></li>
								</ul>
							</li>
							<li> 
								<a href=""><i class="fa fa-question"></i> <span>Knowledgebase</span></a>
							</li>
							<li> 
								<a href=""><i class="fa fa-bell"></i> <span>Activities</span></a>
							</li>
							<li> 
								<a href=""><i class="fa fa-user-plus"></i> <span>Users</span></a>
							</li>
							<li class="submenu"> 
								<a href=""><i class="fa fa-cog"></i> <span>Settings</span><span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Company Setting </a></li>
									<li><a href=""> Localization </a></li>
									<li><a href="/role"> Role and Permission </a></li>
									<li><a href="/change_password"> Change Password </a></li>
									<li><a href="/leave_type"> Leave Type </a></li>
									<li><a href="/module">Module</a></li>
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="fa fa-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Employee Profile </a></li>
									<li><a href=""> Client Profile </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Login </a></li>
									<li><a href=""> Register </a></li>
									<li><a href=""> Forgot Password </a></li>
									<li><a href=""> OTP </a></li>
									<li><a href=""> Lock Screen </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="">404 Error </a></li>
									<li><a href="">500 Error </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Subscriptions (Admin) </a></li>
									<li><a href=""> Subscriptions (Company) </a></li>
									<li><a href=""> Subscribed Companies</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href=""> Search </a></li>
									<li><a href=""> FAQ </a></li>
									<li><a href=""> Terms </a></li>
									<li><a href=""> Privacy Policy </a></li>
									<li><a href=""> Blank Page </a></li>
								</ul>
							</li>
							<li> 
								<a href=""><i class="fa fa-puzzle-piece"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="">Basic Inputs </a></li>
									<li><a href="">Input Groups </a></li>
									<li><a href="">Horizontal Form </a></li>
									<li><a href=""> Vertical Form </a></li>
									<li><a href=""> Form Mask </a></li>
									<li><a href=""> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="">Basic Tables </a></li>
									<li><a href="">Data Table </a></li>
								</ul>
							</li>
							<li> 
								<a href="#"><i class="fa fa-file-text"></i> <span>Documentation</span></a>
							</li>
							<li> 
								<a href="javascript:void(0);"><i class="fa fa-info"></i> <span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span></a>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fa fa-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li> --}}
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				@yield('content')

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{asset('asset/template/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('asset/template/js/popper.min.js')}}"></script>
        <script src="{{asset('asset/template/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{asset('asset/template/js/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Chart JS -->
		<script src="{{asset('asset/template/js/morris.min.js')}}"></script>
		<script src="{{asset('asset/template/js/raphael.min.js')}}"></script>
		<script src="{{asset('asset/template/js/chart.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('asset/template/js/app.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 03:17:32 GMT -->
</html>