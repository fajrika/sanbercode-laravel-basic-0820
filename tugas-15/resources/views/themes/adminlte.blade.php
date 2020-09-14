{{-- {{request()->routeIs(['question.index','question.create'])}} --}}
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | DataTables</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	@stack('css')

</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
		</nav>
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a class="brand-link">
				<img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">AdminLTE 3</span>
			</a>
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Alexander Pierce</a>
					</div>
				</div>
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item has-treeview {{request()->routeIs(['native','datatable']) ? 'menu-open' : ''}}">
							<a href="#" class="nav-link {{request()->routeIs(['native','datatable']) ? 'active' : ''}}">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Tables
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{route('native')}}" class="nav-link {{route('native') == Request::url() ? 'active' : ''}}">
										<i class="far fa-circle nav-icon"></i>
										<p>Native</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{route('datatable')}}" class="nav-link {{route('datatable') == Request::url() ? 'active' : ''}}">
										<i class="far fa-circle nav-icon"></i>
										<p>DataTables</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item has-treeview {{request()->routeIs(['question.index','question.create']) ? 'menu-open' : ''}}">
							<a href="#" class="nav-link {{request()->routeIs(['question.index','question.create']) ? 'active' : ''}}">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Page
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{route('question.index')}}" class="nav-link {{route('question.index') == Request::url() ? 'active' : ''}}">
										<i class="far fa-circle nav-icon"></i>
										<p>Question (Tugas 15,16)</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>@yield('link')</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">@yield('link')</li>
							</ol>
						</div>
					</div>
				</div> 
			</section> 
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							@yield('content')
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.0.5
			</div>
			<strong>
				Copyright &copy; 2014-2019 
				<a href="http://adminlte.io">AdminLTE.io</a>.
			</strong> 
			All rights reserved.
		</footer>
		<aside class="control-sidebar control-sidebar-dark">
		</aside>
	</div>
	<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
	<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    @stack('script')
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>