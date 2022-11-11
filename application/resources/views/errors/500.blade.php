<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="robots" content="noindex, nofollow">
        <title>Error 500</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="{{asset('assets')}}/js/html5shiv.min.js"></script>
			<script src="{{asset('assets')}}/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="error-page">
		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<div class="error-box">
				<h1>500</h1>
				<h3><i class="fa fa-warning"></i> Oops! Something went wrong</h3>
				<p>The page you requested was not found.</p>
				<a href="{{url('/')}}" class="btn btn-custom">Back to Home</a>
			</div>

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{asset('assets')}}/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{asset('assets')}}/js/popper.min.js"></script>
        <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets')}}/js/app.js"></script>

    </body>
</html>
