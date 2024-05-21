<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor3 color-header headercolor5">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('backend')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('backend')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('backend')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('backend')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('backend')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('backend')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('backend')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('backend')}}/assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/dark-theme.css" />
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/semi-dark.css" />
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/header-colors.css" />
	<title>Synadmin – Bootstrap5 Admin Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('backend')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Synadmin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{url('admin/dashboard')}}" class="">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="{{url('admin/categories')}}" class="">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Categories</div>
					</a>
				</li>
				<li>
					<a href="{{url('admin/products')}}" class="">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Products</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div style="margin-left: auto" class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{asset('backend')}}/assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="{{url('admin/logout')}}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-12 col-lg-8">
						<div class="card radius-10">
							<div class="card-header border-bottom-0 bg-transparent">
								<div class="d-lg-flex align-items-center">
									<div>
										<h6 class="font-weight-bold mb-2 mb-lg-0">Hospital Activities</h6>
									</div>
									<div class="ms-lg-auto mb-2 mb-lg-0">
										<div class="btn-group-round">
											<div class="btn-group">
												<button type="button" class="btn btn-white">Last 1 Year</button>
												<div class="dropdown-menu">
												  <a class="dropdown-item" href="javaScript:;">Last Month</a>
													<a class="dropdown-item" href="javaScript:;">Last Week</a>
												</div>
												<button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div id="chart1"></div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card radius-10 bg-gradient-burning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<img src="{{asset('backend')}}/assets/images/icons/appointment-book.png" width="45" alt="" />
									<div class="ms-auto text-end">
										<p class="mb-0 text-white"><i class='bx bxs-arrow-from-bottom'></i> 2.69%</p>
										<p class="mb-0 text-white">Since Last Month</p>
									</div>
								</div>
								<div class="d-flex align-items-center mt-3">
									<div class="flex-grow-1">
										<p class="mb-1 text-white">Appointments</p>
										<h4 class="mb-0 text-white font-weight-bold">1879</h4>
									</div>
									<div id="chart2"></div>
								</div>
							</div>
						</div>
						<div class="card radius-10 bg-gradient-blues">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<img src="{{asset('backend')}}/assets/images/icons/surgery.png" width="45" alt="" />
									<div class="ms-auto text-end">
										<p class="mb-0 text-white"><i class='bx bxs-arrow-from-bottom'></i> 3.56%</p>
										<p class="mb-0 text-white">Since Last Month</p>
									</div>
								</div>
								<div class="d-flex align-items-center mt-3">
									<div class="flex-grow-1">
										<p class="mb-1 text-white">Surgery</p>
										<h4 class="mb-0 text-white font-weight-bold">3768</h4>
									</div>
									<div id="chart3"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->

				<div class="row row-cols-1 row-cols-lg-3">
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h6 class="mb-0 font-weight-bold">Top Doctors</h6>
									<p class="mb-0 ms-auto"><i class='bx bx-dots-horizontal-rounded float-end font-24'></i>
									</p>
								</div>
								<div class="d-flex align-items-center mt-3">
									<img src="{{asset('backend')}}/assets/images/avatars/avatar-1.png" width="45" height="45" class="rounded-circle" alt="" />
									<div class="flex-grow-1 ms-3">
										<p class="mb-0"><span class="badge badge-pill bg-light-danger text-danger">4.9</span>
										</p>
										<p class="font-weight-bold mb-0">Dr. Neil Wagner</p>
										<p class="text-secondary mb-0">Pediatrician</p>
									</div> <a href="javaScript:;" class="btn btn-sm btn-outline-primary radius-10">Schedule</a>
								</div>
								<hr/>
								<div class="d-flex align-items-center">
									<img src="{{asset('backend')}}/assets/images/avatars/avatar-2.png" width="45" height="45" class="rounded-circle" alt="" />
									<div class="flex-grow-1 ms-3">
										<p class="mb-0"><span class="badge badge-pill bg-light-danger text-danger">3.5</span>
										</p>
										<p class="font-weight-bold mb-0">Dr. Kane Williamson</p>
										<p class="text-secondary mb-0">Psychiatrist</p>
									</div> <a href="javaScript:;" class="btn btn-sm btn-outline-primary radius-10">Schedule</a>
								</div>
								<hr/>
								<div class="d-flex align-items-center">
									<img src="{{asset('backend')}}/assets/images/avatars/avatar-3.png" width="45" height="45" class="rounded-circle" alt="" />
									<div class="flex-grow-1 ms-3">
										<p class="mb-0"><span class="badge badge-pill bg-light-danger text-danger">5.2</span>
										</p>
										<p class="font-weight-bold mb-0">Dr. Tom Bundle</p>
										<p class="text-secondary mb-0">Neurologist</p>
									</div> <a href="javaScript:;" class="btn btn-sm btn-outline-primary radius-10">Schedule</a>
								</div>
								<hr/>
								<div class="d-flex align-items-center">
									<img src="{{asset('backend')}}/assets/images/avatars/avatar-4.png" width="45" height="45" class="rounded-circle" alt="" />
									<div class="flex-grow-1 ms-3">
										<p class="mb-0"><span class="badge badge-pill bg-light-danger text-danger">8.9</span>
										</p>
										<p class="font-weight-bold mb-0">Dr. Tim Southee</p>
										<p class="text-secondary mb-0">Rheumatologist</p>
									</div> <a href="javaScript:;" class="btn btn-sm btn-outline-primary radius-10">Schedule</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h6 class="mb-0 font-weight-bold">Diseases Report</h6>
									<p class="mb-0 ms-auto"><i class='bx bx-dots-horizontal-rounded float-end font-24'></i>
									</p>
								</div>
								<div class="pt-5">
									<div id="chart4"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100 overflow-hidden">
							<div class="card-body">
								<div class="">
									<h4 class="mb-2 font-weight-bold">3,240</h4>
									<p class="mb-3 text-secondary">Patients this month</p>
								</div>
							</div>
							<div id="chart5"></div>
						</div>
					</div>
				</div><!--end row-->

				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h6 class="mb-0 font-weight-bold">Most Common Medication</h6>
									<p class="mb-0 ms-auto"><i class='bx bx-dots-horizontal-rounded float-end font-24'></i>
									</p>
								</div>
								<div class="d-flex my-4">
									<h1 class="mb-0 font-weight-bold">144</h1>
									<p class="mb-0 ml-3 font-14 align-self-end text-secondary">Patients</p>
								</div>
								<div class="progress radius-10" style="height: 10px">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="table-responsive mt-4">
									<table class="table mb-0">
										<tbody>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class='bx bxs-checkbox me-2 font-24 text-primary'></i>
														</div>
														<div>Medication "Aripiprazole"</div>
													</div>
												</td>
												<td>46 Patients</td>
												<td class="px-0 text-end">33%</td>
											</tr>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class='bx bxs-checkbox me-2 font-24 text-danger'></i>
														</div>
														<div>Medication "Risperidone"</div>
													</div>
												</td>
												<td>12 Patients</td>
												<td class="px-0 text-end">17%</td>
											</tr>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class='bx bxs-checkbox me-2 font-24 text-success'></i>
														</div>
														<div>Medication "Aripiprazole+Risperidone"</div>
													</div>
												</td>
												<td>29 Patients</td>
												<td class="px-0 text-end">21%</td>
											</tr>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class='bx bxs-checkbox me-2 font-24 text-warning'></i>
														</div>
														<div>No Medication</div>
													</div>
												</td>
												<td>34 Patients</td>
												<td class="px-0 text-end">23%</td>
											</tr>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class='bx bxs-checkbox me-2 font-24 text-info'></i>
														</div>
														<div>Other</div>
													</div>
												</td>
												<td>28 Patients</td>
												<td class="px-0 text-end">19%</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h6 class="mb-0 font-weight-bold">Average Treatment Cost</h6>
									<p class="mb-0 ms-auto"><i class='bx bx-dots-horizontal-rounded float-end font-24'></i>
									</p>
								</div>
								<div class="bg-light-primary p-3 radius-10 text-center mt-3">
									<h1 class="mb-0 font-weight-bold text-primary">$8,305</h1>
									<p class="mb-0">Average Treatment Cost</p>
								</div>
								<div id="chart6"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="card radius-10">
					<div class="card-header bg-transparent">
						<h6 class="mb-0 font-weight-bold">New Patients</h6>
					</div>
					<div class="table-responsive p-3">
						<table class="table mb-0">
							<thead>
								<tr>
									<th>Patient</th>
									<th>Doctor</th>
									<th>Date & Time</th>
									<th>Disease</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="d-flex align-items-center mt-3">
											<img src="{{asset('backend')}}/assets/images/avatars/avatar-1.png" width="35" height="35" class="rounded-circle" alt="">
											<div class="flex-grow-1 ms-3">
												<p class="font-weight-bold mb-0">Annette Black</p>
											</div>
										</div>
									</td>
									<td>Dr. Cody Fisher</td>
									<td>Jun 08, 2020, 1:00pm</td>
									<td><span class="badge badge-pill bg-success">injuries</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center mt-3">
											<img src="{{asset('backend')}}/assets/images/avatars/avatar-2.png" width="35" height="35" class="rounded-circle" alt="">
											<div class="flex-grow-1 ms-3">
												<p class="font-weight-bold mb-0">Devone Lane</p>
											</div>
										</div>
									</td>
									<td>Dr. Esther Howard</td>
									<td>Jun 08, 2020, 2:00pm</td>
									<td><span class="badge badge-pill bg-danger">Diabetes</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center mt-3">
											<img src="{{asset('backend')}}/assets/images/avatars/avatar-3.png" width="35" height="35" class="rounded-circle" alt="">
											<div class="flex-grow-1 ms-3">
												<p class="font-weight-bold mb-0">Kathryn Murphy</p>
											</div>
										</div>
									</td>
									<td>Dr. Wade Warren</td>
									<td>Jun 08, 2020, 3:00pm</td>
									<td><span class="badge badge-pill bg-info">Influenza</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center mt-3">
											<img src="{{asset('backend')}}/assets/images/avatars/avatar-4.png" width="35" height="35" class="rounded-circle" alt="">
											<div class="flex-grow-1 ms-3">
												<p class="font-weight-bold mb-0">Jane Cooper</p>
											</div>
										</div>
									</td>
									<td>Dr. Jane Cooper</td>
									<td>Jun 08, 2020, 5:00pm</td>
									<td><span class="badge badge-pill bg-warning">Respiratory</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="{{asset('backend')}}/assets/js/index5.js"></script>
	<!--app JS-->
	<script src="{{asset('backend')}}/assets/js/app.js"></script>
</body>

</html>