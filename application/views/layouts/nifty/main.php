<!DOCTYPE html>
<html lang="en">
<!-- head -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Master CI 1.0 | Nifty Themes</title>
	<link href="<?=base_url()?>assets/images/codeigniter_logo.png" rel="SHORTCUT ICON" />
	<!-- themes style -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/themes/nifty/load-style.css" />
	<!-- other style -->
	<?=$this->template->buildCss();?>

	<script type="text/javascript" src="<?=base_url()?>assets/themes/nifty/plugins/pace/pace.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/themes/nifty/plugins/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/themes/nifty/plugins/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/themes/nifty/plugins/js/nifty.js"></script>

	<?=$this->template->buildJs('top');?>
</head>

<body>
	<div id="container" class="effect aside-float aside-bright mainnav-lg navbar-fixed">

		<?php $this->load->view('layouts/nifty/navbar');?>

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				<?php if (ENVIRONMENT == 'development') {?>
				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-warning">
							<strong>DEVELOPMENT MODE</strong>, Page rendered in <strong>{elapsed_time}</strong> seconds.
							<?='CodeIgniter Version <strong>' . CI_VERSION . '</strong>'?>
						</div>
					</div>
				</div>
				<?php }?>
				<!--Page title , content dan breadcumb-->
				<!--===================================================-->
				<?php $this->load->view($content);?>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title, content dan breadcumb-->
            </div>
			<!--MAIN NAVIGATION-->
			<!--===================================================-->
			<?php $this->load->view('layouts/nifty/sidebar');?>
			<!--===================================================-->
			<!--END MAIN NAVIGATION-->
		</div>
		<!-- FOOTER -->
		<!--===================================================-->
		<footer id="footer">
			<!-- Visible when footer positions are static -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<div class="hide-fixed pull-right pad-rgt">
				<b>Master CI 1.0</b>
			</div>

			<p class="pad-lft">&#0169; 2019</p>



		</footer>
		<!--===================================================-->
		<!-- END FOOTER -->


		<!-- SCROLL PAGE BUTTON -->
		<!--===================================================-->
		<button class="scroll-top btn in" style="animation: 0.8s ease 0s normal none 1 running jellyIn;">
			<i class="pci-chevron chevron-up"></i>
		</button>
		<!--===================================================-->
	</div>
	<!-- load javascript -->
	<?=$this->template->buildJs('bottom');?>
	<!-- end of javascript  -->
</body>

</html>
