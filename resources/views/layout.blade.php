    <!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin dashboard, admin panel template, html admin template, dashboard html template, bootstrap 4 dashboard, template admin bootstrap 4, simple admin panel template, simple dashboard html template,  bootstrap admin panel, task dashboard, job dashboard, bootstrap admin panel, dashboards html, panel in html, bootstrap 4 dashboard, bootstrap 5 dashboard, bootstrap5 dashboard"/>

		<!-- Title -->
		<title>@yield('title')</title>
    @include("layouts.inc.__css")
	</head>

	<body class="app sidebar-mini">

		<!---Global-loader-->
		<div id="global-loader" >
			<img src="{{ asset('') }}/assets/images/svgs/loader.svg" alt="loader">
		</div>

		<div class="page">
			<div class="page-main">

                      <!--aside open-->
    @include("layouts.inc.sidebar")

				<!--aside closed-->

				<div class="app-content main-content">
					<div class="side-app">


						<!--app header-->
    @include("layouts.inc.header")

						<!--/app header-->


						<!-- Row -->
@yield('content')
						<!-- End Row-->

					</div><!-- end app-content-->
				</div>
			</div>

			<!--Footer-->
            @include('layouts.inc.footer')
			<!-- End Footer-->

			<!--sidebar-right-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="card-header border-bottom pb-5">
					<h4 class="card-title">Notifications </h4>
					<div class="card-options">
						<a href="#" class="btn btn-sm btn-icon btn-light  text-primary"  data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right"><i class="feather feather-x"></i> </a>
					</div>
				</div>
				<div class="">
					<div class="list-group-item  align-items-center border-0">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(../../assets/images/users/4.jpg)"></span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Liam <span class="text-muted font-weight-normal">Sent Message</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>30 mins ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(../../assets/images/users/10.jpg)"></span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Paul<span class="text-muted font-weight-normal"> commented on you post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 hour ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3 bg-pink-transparent"><span class="feather feather-shopping-cart"></span></span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">James<span class="text-muted font-weight-normal"> Order Placed</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 day ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(../../assets/images/users/9.jpg)">
								<span class="avatar-status bg-green"></span>
							</span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Diane<span class="text-muted font-weight-normal"> New Message Received</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 day ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(../../assets/images/users/5.jpg)">
								<span class="avatar-status bg-muted"></span>
							</span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Vinny<span class="text-muted font-weight-normal"> shared your post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>2 days ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3 bg-primary-transparent">M</span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Mack<span class="text-muted font-weight-normal"> your admin lanuched</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 week ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(../../assets/images/users/12.jpg)">
								<span class="avatar-status bg-green"></span>
							</span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Vinny<span class="text-muted font-weight-normal"> shared your post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>04 Jan 2021 1:56 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(../../assets/images/users/8.jpg)">	</span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Anna<span class="text-muted font-weight-normal"> likes your post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>25 Dec 2020 11:25 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(../../assets/images/users/14.jpg)">	</span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Kimberly<span class="text-muted font-weight-normal"> Completed one task</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>24 Dec 2020 9:30 Pm</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(../../assets/images/users/3.jpg)">	</span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Rina<span class="text-muted font-weight-normal"> your account has Updated</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>28 Nov 2020 7:16 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3 bg-success-transparent">J</span>
							<div class="mt-1">
								<a href="#" class="font-weight-semibold fs-16">Julia<span class="text-muted font-weight-normal"> Prepare for Presentation</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>18 Nov 2020 11:55 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/sidebar-right-->

			<!--Change password Modal -->
			<div class="modal fade"  id="changepasswordnmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Change Password</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
							<div class="form-group">
								<label class="form-label">Confirm New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
							<a href="#" class="btn btn-primary">Confirm</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Change password Modal  -->

			<!-- New Project Modal -->
			<div class="modal fade"  id="newprojectmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Project</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project ID</label>
										<input class="form-control" placeholder="Number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project Title</label>
										<input class="form-control" placeholder="Text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Department:</label>
										<select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Department">
											<option label="Select Department"></option>
											<option value="1">Designing Department</option>
											<option value="2">Development Department</option>
											<option value="3">Marketing Department</option>
											<option value="4">Human Resource Department</option>
											<option value="5">Managers Department</option>
											<option value="6">Application Department</option>
											<option value="7">Support Department</option>
											<option value="8">IT Department</option>
											<option value="9">Technical Department</option>
											<option value="10">Accounts Department</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project Priority:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Priority">
											<option label="Select Priority"></option>
											<option value="1">High</option>
											<option value="2">Medium</option>
											<option value="3">Low</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Enter Client">
											<option label="Enter Client"></option>
											<option value="1">Client 01</option>
											<option value="2">Client 02</option>
											<option value="3">Client 03</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">($)Price:</label>
										<input class="form-control" placeholder="Enter Price eg:$69.00">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Assigned Team:</label>
								<select name="attendance"  class="form-control custom-select select2" multiple="multiple" data-placeholder="Select Employee">
									<option label="Select Employee"></option>
									<option value="1">Faith Harris</option>
									<option value="2">Austin Bell</option>
									<option value="3">Maria Bower</option>
									<option value="4">Peter Hill</option>
									<option value="5">Victoria Lyman</option>
									<option value="6">Adam Quinn</option>
									<option value="7">Melanie Coleman</option>
									<option value="8">Max Wilson</option>
									<option value="9">Amelia Russell</option>
									<option value="10">Justin Metcalfe</option>
									<option value="11">Ryan Young</option>
									<option value="12">Jennifer Hardacre</option>
									<option value="13">Justin Parr</option>
									<option value="14">Julia Hodges</option>
									<option value="15">Michael Sutherland</option>
								</select>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Form:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">To:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Description:</label>
								<div class="editor"></div>
							</div>
							<div class="form-group">
								<label class="form-label">Upload Files:</label>
								<div class="form-group">
									   <label for="form-label" class="form-label"></label>
										<input class="form-control" type="file">
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 me-5">Work Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option5">
									<span class="custom-control-label">Active</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Completed</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">On going</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
									<span class="custom-control-label">Pending</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option4">
									<span class="custom-control-label">Not Started</span>
								</label>
								<label class="custom-control custom-radio success">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option6">
									<span class="custom-control-label">Canceled</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success" onclick="not1()">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!-- New Project Modal -->

			<!--View Sub-Task Modal -->
			<div class="task-fade sidebar-modal">
				<div class="sidebar-dialog task-modal">
					<div class="sidebar-content">
						<div class="sidebar-header">
							<div>
								<h4 class=""><span class="font-weight-normal text-muted me-2">Task 01</span> Design Updated </h4>
								<label class="me-2">Priority:</label><span class="badge badge-danger-light">High</span>
							</div>
							<div class="ms-auto mt-3">
								<a href="#" class="btn btn-success me-2">Mark as Complete</a>
								<a href="#" class="action-btns" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="feather feather-more-horizontal"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="#"><i class="feather feather-send me-2"></i>Send</a></li>
									<li><a href="#"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
									<li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
								<a href="#" class="action-btns dismiss">
									<i class="feather feather-x"></i>
								</a>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-8 border-end">
								<div class="card-body">
									<h5 class="mb-4  font-weight-semibold">Description</h5>
									<div class="main-profile-bio mb-0">
										<span class="fs-14 mt-2 text-muted">Mobile App Ui Designing and Prototyping
											It is a long established fact that a reader will be distracted by the readable content of a page when looking
										</span>
										<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries nchanged.</p>
										<h5 class="mb-4 mt-5 font-weight-semibold">Attachments</h5>
										<div class="row">
											<div class="col-md-4">
												<div class="p-3 br-7 border text-center">
													<a href="#" class="text-center">
														<img src="../../assets/images/files/attachments/2.png" alt="img" class="avatar bg-transparent avatar-lg mb-2">
														<div>
															<span class="font-weight-semibold fs-12">doc.pdf<span class="text-muted ms-2">(23.8 KB)</span></span>
														</div>
													</a>
												</div>
											</div>
											<div class="col-md-4">
												<div class="p-3 br-7 border text-center mt-4 mt-lg-0">
													<a href="#" class="text-center">
														<img src="../../assets/images/files/attachments/4.png" alt="img" class="avatar bg-transparent avatar-lg mb-2">
														<div>
															<span class="font-weight-semibold fs-12">Project<span class="text-muted ms-2">(578.6MB)</span></span>
														</div>
													</a>
												</div>
											</div>
											<div class="col-md-4">
												<div class="p-5 br-7 border text-center mt-4 mt-lg-0">
													<a href="#" class="text-center fs-35 text-success">
														<i class="fe feather-plus-circle"></i>
													</a>
												</div>
											</div>
										</div>
										<h5 class="mb-4 mt-5 font-weight-semibold">Add Comment</h5>
										<div class="form-group">
											<label class="form-label">Title</label>
											<input class="form-control" placeholder="text">
										</div>
										<div class="form-group">
											<label class="form-label">Description</label>
											<div class="summernote1"></div>
										</div>
										<a href="#" class="btn btn-primary">Submit</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card-body">
									<div class="form-group mb-5">
										<label>Assigned To:</label>
										<div class="d-flex">
											<span class="avatar avatar-md brround me-3" style="background-image: url(../../assets/images/users/1.jpg)"></span>
											<div class="me-3 mt-0 mt-sm-1 d-block">
												<h6 class="mb-1 fs-14">Faith Harris</h6>
												<p class="text-muted mb-0 fs-12">Web Designer</p>
											</div>
										</div>
									</div>
									<div class="form-group mb-5">
										<label class="mb-1">Department:</label>
										<p class="form-label">Designing</p>
									</div>
									<div class="form-group mb-5">
										<label class="mb-1">Start Date:</label>
										<p class="form-label">12-02-2021</p>
									</div>
									<div class="form-group mb-5">
										<label class="mb-1">Deadline Date:</label>
										<p class="form-label">16-06-2021</p>
									</div>
									<div class="form-group mb-5">
										<label class="mb-1">Work Status:</label>
										<div><span class="badge badge-warning">On hold</span></div>
									</div>
									<div class="d-flex align-items-end justify-content-between mt-5">
										<h6 class="">Project Status</h6>
										<h6 class="font-weight-bold mb-1">30%</h6>
									</div>
									<div class="progress progress-sm">
										<div class="progress-bar bg-success w-30"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- View Sub-Task Modal  -->

		</div>   
     @include('layouts.inc.__js')
	 @yield('scripts')
	</body>
</html>
