<nav id="mainnav-container">
	<div id="mainnav">

		<!--Menu-->
		<!--================================-->
		<div id="mainnav-menu-wrap">
			<div class="nano">
				<div class="nano-content">

					<!--Profile Widget-->
					<!--================================-->
					<div id="mainnav-profile" class="mainnav-profile">
						<div class="profile-wrap">
							<div class="pad-btm">
								<img class="img-circle img-sm img-border"
									src="<?=base_url()?>assets/images/default-user.jpg" alt="Profile Picture">
							</div>
							<a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
								<span class="pull-right dropdown-toggle">
									<i class="dropdown-caret"></i>
								</span>

								<p class="mnp-name">Armisianto</p>
								<span class="mnp-desc">armisianto@gmail.com</span>
							</a>
						</div>
						<div id="profile-nav" class="collapse list-group bg-trans">
							<a href="#" class="list-group-item">
								<i class="demo-pli-male icon-lg icon-fw"></i> Profil
							</a>
							<a href="#" class="list-group-item">
								<i class="demo-pli-information icon-lg icon-fw"></i> Help
							</a>
							<a href="#" class="list-group-item">
								<i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
							</a>
						</div>
					</div>
					<ul id="mainnav-menu" class="list-group">

						<!-- List Menu -->
						<!--sidebar nav start-->
						<li class="list-header">Navigation</li>
						<li class="active-link">
							<a href="#">
								<i class="fa fa-home"></i> <span class="menu-title">Dashboard</span>
							</a>
						</li><li class="active-link">
							<a href="<?=site_url()?>features/pusher_notification">
								<i class="fa fa-bell"></i> <span class="menu-title">Pusher Notification</span>
							</a>
						</li>
						<li class="">
							<a href="#" aria-expanded="false">
								<i class="demo-psi-tactic"></i>
								<span class="menu-title">Menu Level</span>
								<i class="arrow"></i>
							</a>

							<!--Submenu-->
							<ul class="collapse" aria-expanded="false" style="">
								<li><a href="#">Second Level Item</a></li>
								<li><a href="#">Second Level Item</a></li>
								<li><a href="#">Second Level Item</a></li>
								<li class="list-divider"></li>
								<li class="">
									<a href="#" aria-expanded="false">Third Level<i class="arrow"></i></a>

									<!--Submenu-->
									<ul class="collapse" aria-expanded="false" style="height: 0px;">
										<li><a href="#">Third Level Item</a></li>
										<li><a href="#">Third Level Item</a></li>
										<li><a href="#">Third Level Item</a></li>
										<li><a href="#">Third Level Item</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Third Level<i class="arrow"></i></a>

									<!--Submenu-->
									<ul class="collapse" aria-expanded="false">
										<li><a href="#">Third Level Item</a></li>
										<li><a href="#">Third Level Item</a></li>
										<li><a href="#">Third Level Item</a></li>
										<li class="list-divider"></li>
										<li><a href="#">Third Level Item</a></li>
										<li><a href="#">Third Level Item</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!--================================-->
			<!--End widget-->
		</div>
		<!--================================-->
		<!--End menu-->
	</div>
</nav>
