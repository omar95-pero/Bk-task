				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="index.html">
							<img src="{{ asset('') }}/assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Dayonelogo">
							<img src="{{ asset('') }}/assets/images/brand/logo-white.png" class="header-brand-img dark-logo" alt="Dayonelogo">
							<img src="{{ asset('') }}/assets/images/brand/favicon.png" class="header-brand-img mobile-logo" alt="Dayonelogo">
							<img src="{{ asset('') }}/assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
						</a>
					</div>
					<div class="app-sidebar3">
						<div class="app-sidebar__user">
							<div class="dropdown user-pro-body text-center">
								<div class="user-pic">
									<img src="{{ asset('') }}/assets/images/users/16.jpg" alt="user-img" class="avatar-xxl rounded-circle mb-1">
								</div>
								<div class="user-info">
									<h5 class=" mb-2">Omar Pero</h5>
									<span class="text-muted app-sidebar__user-name text-sm">App Developer</span>
								</div>
							</div>
						</div>
						<ul class="side-menu">
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="#">
									<i class="feather feather-home sidemenu_icon"></i>
									<span class="side-menu__label">BK <span class="nav-list">Dashboard</span></span><i class="angle fa fa-angle-right"></i>
								</a>
								<ul class="slide-menu">
	
									<li><a href="{{ route('students.index') }}" class="slide-item">Students</a></li>
									<li><a href="{{ route('schools.index') }}" class="slide-item">Schools</a></li>
								</ul>
							</li>
						</ul>
						<div class="Annoucement_card">
							<div class="text-center">
								<div>
									<h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12">Announcement</h5>
									<div class="bg-layer py-4">
										<img src="{{ asset('') }}/assets/images/photos/announcement-1.png" class="py-3 text-center mx-auto" alt="img">
									</div>
									<p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2">Make an Announcement to Our Employee</p>
								</div>
							</div>
							<button class="btn btn-block btn-primary my-4 fs-12">Create Announcement</button>
							<button class="btn btn-block btn-outline fs-12">See history</button>
						</div>
					</div>
				</aside>