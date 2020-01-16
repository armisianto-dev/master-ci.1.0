<!DOCTYPE html>
<html lang="en">
<!-- head -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Master CI 1.0 | Nifty Themes - Login</title>
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
	<div id="container" class="cls-container">
		<div id="bg-overlay" class="bg-img" style="background-image: url('<?=base_url()?>assets/images/nuta.png');">
		</div>
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<div class="mar-ver pad-btm">
						<img src="<?=base_url()?>assets/images/codeigniter_logo.png" alt="Master CI"
							style="max-width:80px" />
						<h3 class="h4 mar-top">Master CI</h3>
						<p class="text-muted"></p>
					</div>
					<?php $this->load->view($content);?>

				</div>

				<div class="pad-all">
					<a href="pages-password-reminder.html" class="btn-link mar-rgt">Lupa password ?</a>
				</div>
			</div>
		</div>
	</div>
	<!-- load javascript -->
	<?=$this->template->buildJs('bottom');?>
	<!-- end of javascript  -->
</body>

</html>
