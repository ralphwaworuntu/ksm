<!DOCTYPE html> <html lang="en"> 
<head> 
	<meta charset="UTF-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
	<title>KSM - Gaming Solution | Dashboard</title> 
	<meta name="description" content="Grandinis a Dashboard & Admin Site Responsive Template by hencework." /> 
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Grandin Admin, Grandinadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" /> 
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	<link href="../vendors/bower_components/datatables.net-responsive/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css"/>

	<!--alerts CSS -->
	<link href="../vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
	
	<!-- Toast CSS -->
	<link href="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="admin/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-6-active pimary-color-pink">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="{{route('home-auth')}}">
							<img class="brand-img" src="../img/logo.png" alt="brand"/>
							<span class="brand-text">KSM</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					
					
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="../img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							
							<li>
								<a href="{{route('home')}}"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				
					<!-- User Profile -->
					<li>
						<div class="user-profile text-center">
							<img src="../img/user1.png" alt="user_auth" class="user-auth-img img-circle"/>
							<div class="dropdown mt-5">
							<a href="#" class="dropdown-toggle pr-0 bg-transparent" data-toggle="dropdown">ryan georgian <span class="caret"></span></a>
							<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
								<li>
									<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
								</li>
								
								<li>
									<a href="{{route('home')}}"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
								</li>
							</ul>
							</div>
						</div>
					</li>
					<!-- /User Profile -->
				
				<li><hr class="light-grey-hr mb-10"/></li>
				<li>
					<a class="active" href="{{route('home-dashboard')}}" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="fa fa-tachometer mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
					
				</li>
				<li>
					<a href="{{route('home-dashboard-event')}}" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-calendar mr-20"></i><span class="right-nav-text">Event</span></div>
						<div class="clearfix"></div></a>
				</li>
				
				
				
				<li><hr class="light-grey-hr mb-10"/></li>
				
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
		
		
			
					
		
		

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">914,001</span></span>
													<span class="weight-500 uppercase-font block font-13 txt-light">Peserta</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-group  data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient1">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">2,100</span></span>
													<span class="weight-500 uppercase-font block txt-light">Event selesai</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-calendar-check-o data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient2">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 txt-light data-wrap-left">
													<span class="block counter"><span class="counter-anim">54,876</span></span>
													<span class="weight-500 uppercase-font block">Event Aktif</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 txt-light data-wrap-right">
													<i class=" fa fa-calendar data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient3">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">4,643</span></span>
													<span class="weight-500 uppercase-font block txt-light">total event</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 txt-light data-wrap-right">
													<i class="fa fa-check-square data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-defauld card-view">
							
							<div class="modal-body">
								<h6 class="pull-left panel-title uppercase-font txt-dark mt-10"><b>Kelola Event</b></h6>
								<button class="pull-right btn btn-info btn-rounded btn-anim img-responsive model_img pull-right"  alt="default" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="ti ti-plus"></i><span class="btn-text">Tambah Event</span> </button>
							</div>
							
								<div class="clearfix"></div>
							<div class="pull-right">
								<div  class="panel-wrapper collapse in">
									<div  class="panel-body">
										<!-- sample modal content -->
										<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
											<div class="modal-dialog modal-sm">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h5 class="modal-title" id="mySmallModalLabel">Pilih Jenis Turnamen</h5>
													</div>
													<div class="modal-body"> 
														<a href="{{route('add-event')}}" class="btn btn-danger btn-rounded btn-anim ml-25"><i class="ti ti-plus"></i><span class="btn-text">Online</span></a>
														<a href="{{route('add-event')}}" class="btn btn-success btn-rounded btn-anim ml-20"><i class="ti ti-plus"></i><span class="btn-text">Offline</span></a>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<!-- /.modal -->
										<!-- Button trigger modal -->
										
									</div>
							</div>
								
							</div>
							
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="">
											<table id="myTable1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>Nama Event</th>
														<th>Jenis Game</th>
														<th>Total Peserta</th>
														<th>Jadwal Event</th>
														<th>Status</th>
														<th>Foto</th>
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<td>Saina Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>2011/04/25</td>
														<td><span class="label label-success font-weight-100">Diterima</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Faret Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>2011/07/25</td>
														<td><span class="label label-danger font-weight-100">Ditolak</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>2011/04/25</td>
														<td><span class="label label-success font-weight-100">Diterima</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>2009/01/12</td>
														<td><span class="label label-danger font-weight-100">Ditolak</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Saina Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>2011/04/25</td>
														<td><span class="label label-success font-weight-100">Diterima</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Faret Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>2011/07/25</td>
														<td><span class="label label-danger font-weight-100">Ditolak</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>2011/04/25</td>
														<td><span class="label label-success font-weight-100">Diterima</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>2009/01/12</td>
														<td><span class="label label-danger font-weight-100">Ditolak</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Saina Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>2011/04/25</td>
														<td><span class="label label-success font-weight-100">Diterima</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Faret Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>2011/07/25</td>
														<td><span class="label label-danger font-weight-100">Ditolak</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>2011/04/25</td>
														<td><span class="label label-success font-weight-100">Diterima</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>2009/01/12</td>
														<td><span class="label label-danger font-weight-100">Ditolak</span></td>
														<td><img src="../img/chair.jpg" alt="iMac" width="80"></td>
													</tr>
													
												</tbody>
											
												<tfoot>
													<tr>
														<th>Nama Event</th>
														<th>Jenis Game</th>
														<th>Total Peserta</th>
														<th>Status</th>
														<th>Jadwal Event</th>
														<th>Aksi</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2020 &copy; Copyright by KSM</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="admin/dist/js/modal-data.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../vendors/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="admin/dist/js/responsive-datatable-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="admin/dist/js/jquery.slimscroll.js"></script>
	
	<!-- simpleWeather JavaScript -->
	<script src="../vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="../vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
	<script src="admin/dist/js/simpleweather-data.js"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="../vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="admin/dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Toast JavaScript -->
	<script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

	<!-- Sweet-Alert  -->
	<script src="../vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
	<script src="admin/dist/js/sweetalert-data.js"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="../vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
	<script src="../vendors/echarts-liquidfill.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Init JavaScript -->
	<script src="admin/dist/js/init.js"></script>
	<script src="admin/dist/js/dashboard-data.js"></script>
</body>

</html>
