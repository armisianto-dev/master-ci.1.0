<header id="navbar">
	<div id="navbar-container" class="boxed">

		<!--Brand logo & name-->
		<!--================================-->
		<div class="navbar-header">
			<a href="#" class="navbar-brand">
				<img src="<?=base_url()?>assets/images/codeigniter_logo.png" alt="Master CI" class="brand-icon">
				<div class="brand-title">
					<span class="brand-text">Master CI</span>
				</div>
			</a>

			<a class="mainnav-toggle pull-right visible-xs-inline" href="#" style="margin-top: 10px; padding-right: 15px;">
				<i class="demo-pli-view-list text-white"></i>
			</a>
		</div>
		<!--================================-->
		<!--End brand logo & name-->

		<!--Navbar Dropdown-->
		<!--================================-->
		<div class="navbar-content clearfix">
			<ul class="nav navbar-top-links pull-left">

				<!--Navigation toogle button-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<li class="tgl-menu-btn">
					<a class="mainnav-toggle hidden-xs" href="#">
						<i class="demo-pli-view-list"></i>
					</a>
				</li>

			</ul>
			<ul class="nav navbar-top-links pull-right hidden-xs">
				<li id="dropdown-user" class="dropdown mar-rgt">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
						<span class="pull-right">
							<img class="img-circle img-user media-object"
								src="<?=base_url()?>assets/images/default-user.jpg" alt="Profile Picture">
						</span>
						<div class="username hidden-xs">Armisianto</div>
					</a>

					<div class="dropdown-menu dropdown-menu-right panel-default">

						<ul class="head-list">
							<li>
								<a href="#">
									<i class="demo-pli-male icon-lg icon-fw"></i> Profil
								</a>
							</li>
							<li>
								<a href="#">
									<i class="demo-pli-information icon-lg icon-fw"></i> Help
								</a>
							</li>
						</ul>
						<div class="pad-all text-center">
							<a href="<?=site_url('login')?>" class="btn btn-danger">
								<i class="demo-pli-unlock"></i> Logout
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!--================================-->
		<!--End Navbar Dropdown-->

	</div>
</header>
<!--===================================================-->
<!--END NAVBAR-->
