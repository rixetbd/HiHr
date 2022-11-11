<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Salary Settings - HRMS admin template</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/line-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="{{asset('assets')}}/js/html5shiv.min.js"></script>
			<script src="{{asset('assets')}}/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            <div class="header">

				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="{{asset('assets')}}/img/logo.png" width="40" height="40" alt="">
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
					<h3>Dreamguy's Technologies</h3>
                </div>
				<!-- /Header Title -->

				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

				<!-- Header Menu -->
				<ul class="nav user-menu">

					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search.html">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->

					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="{{asset('assets')}}/img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="{{asset('assets')}}/img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="{{asset('assets')}}/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="{{asset('assets')}}/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="{{asset('assets')}}/img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>
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
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('assets')}}/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('assets')}}/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('assets')}}/img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('assets')}}/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('assets')}}/img/profiles/avatar-13.jpg">
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
								<a href="activities.html">View all Notifications</a>
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
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset('assets')}}/img/profiles/avatar-09.jpg">
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
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset('assets')}}/img/profiles/avatar-02.jpg">
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
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset('assets')}}/img/profiles/avatar-03.jpg">
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
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset('assets')}}/img/profiles/avatar-05.jpg">
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
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset('assets')}}/img/profiles/avatar-08.jpg">
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
								<a href="chat.html">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="{{asset('assets')}}/img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="login.html">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->

				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->

            </div>
			<!-- /Header -->

			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li>
								<a href="index.html"><i class="la la-home"></i> <span>Back to Home</span></a>
							</li>
							<li class="menu-title">Settings</li>
							<li>
								<a href="settings.html"><i class="la la-building"></i> <span>Company Settings</span></a>
							</li>
							<li>
								<a href="localization.html"><i class="la la-clock-o"></i> <span>Localization</span></a>
							</li>
							<li>
								<a href="theme-settings.html"><i class="la la-photo"></i> <span>Theme Settings</span></a>
							</li>
							<li>
								<a href="roles-permissions.html"><i class="la la-key"></i> <span>Roles & Permissions</span></a>
							</li>
							<li>
								<a href="email-settings.html"><i class="la la-at"></i> <span>Email Settings</span></a>
							</li>
							<li>
								<a href="invoice-settings.html"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
							</li>
							<li class="active">
								<a href="salary-settings.html"><i class="la la-money"></i> <span>Salary Settings</span></a>
							</li>
							<li>
								<a href="notifications-settings.html"><i class="la la-globe"></i> <span>Notifications</span></a>
							</li>
							<li>
								<a href="change-password.html"><i class="la la-lock"></i> <span>Change Password</span></a>
							</li>
							<li>
								<a href="leave-type.html"><i class="la la-cogs"></i> <span>Leave Type</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">

				<!-- Page Content -->
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Salary Settings</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->

							<form>

								<!-- DA and HRA Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										DA and HRA
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_hra" checked>
											<label class="onoffswitch-label" for="switch_hra">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>DA (%)</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>HRA (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
								<!-- /DA and HRA Settings -->

								<!-- Provident Fund Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										Provident Fund Settings
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_pf" checked>
											<label class="onoffswitch-label" for="switch_pf">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Employee Share (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Organization Share (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
								<!-- /Provident Fund Settings -->

								<!-- ESI Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										ESI Settings
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_esi">
											<label class="onoffswitch-label" for="switch_esi">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Employee Share (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Organization Share (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
								<!-- /ESI Settings -->

								<!-- TDS Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										TDS&nbsp; <small class="form-text text-muted">Annual Salary</small>
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_tds">
											<label class="onoffswitch-label" for="switch_tds">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-4">
											<div class="form-group">
												<label>Salary From</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label>Salary To</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label>%</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="d-none d-sm-block">&nbsp;</label>
												<button class="btn btn-danger btn-block set-btn" type="button"><i class="fa fa-trash-o"></i></button>
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-4">
											<div class="form-group">
												<label>Salary From</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label>Salary To</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label>%</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="d-none d-sm-block">&nbsp;</label>
												<button class="btn btn-danger btn-block set-btn" type="button"><i class="fa fa-trash-o"></i></button>
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-2 ml-auto">
											<div class="form-group">
												<button class="btn btn-primary btn-block" type="button"><i class="fa fa-plus"></i></button>
											</div>
										</div>
									</div>
								</div>
								<!-- /TDS Settings -->

								<!-- Submit Button -->
								<div class="submit-section">
									<button class="btn btn-primary submit-btn" type="submit">Save</button>
								</div>
								<!-- /Submit Button -->

                            </form>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{asset('assets')}}/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{asset('assets')}}/js/popper.min.js"></script>
        <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="{{asset('assets')}}/js/jquery.slimscroll.min.js"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets')}}/js/app.js"></script>

    </body>
</html>
