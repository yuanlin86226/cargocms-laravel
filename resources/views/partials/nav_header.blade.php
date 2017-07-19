
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-minimize">
					<button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
						<i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
						<i class="fa fa-navicon visible-on-sidebar-mini"></i>
					</button>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">@yield('page_title')</a>
				</div>
				<div class="collapse navbar-collapse">

					

					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown dropdown-with-icons">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-user"></i>
								<p>
									{{ Auth::user()->username }}
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu dropdown-with-icons">
								<li>
									<a href="#">
										<i class="pe-7s-lock"></i> 修改帳號資料
									</a>
								</li>
								<li>
									<a href="logout" class="text-danger swal-prompt">
										<i class="pe-7s-close-circle"></i>
										登出
									</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>