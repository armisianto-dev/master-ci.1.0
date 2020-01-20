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
	<!-- Socket.io client -->
	<script type="text/javascript">
		$(document).ready(function(){
		var socket = io.connect('http://localhost:3000');
		socket.on('connect', function(){
			socket.emit('join', '<?= $selected_user; ?>');
		});

		socket.emit('notification load', {client_id : '<?= $selected_user; ?>'});

		// Terima Notifikasi
		socket.on('new notification', function(result){
			var totalNotifikasi = result.totalNotification,
				listNotifikasi = result.listNotification;

			if(totalNotifikasi > 0){
				$('#notification-bell-icon-badge').show();
				$('#notification-count').text('You have ' + totalNotifikasi + ' notifications.');
			} else {
				$('#notification-bell-icon-badge').hide();
				$('#notification-count').text('You have 0 notifications.');
			}

			var html = '';	
				listNotifikasi.forEach(function(data){
					html += `<li class="bg-gray">
                                       	<a class="media link-notifikasi" href="javascript:void(0)" data-notification-id="`+data.notification_id+`" data-client-id="`+data.client_id+`" data-link="`+data.link+`">
                                            <div class="media-left">
                                                <img class="img-circle img-sm" alt="Profile Picture" src="<?=base_url()?>assets/images/default-user.jpg">
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">`+data.message+`</div>
                                                <small class="text-muted">30 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>`;
				})
			    
			$('#notification-list').html(html);

			// Baca Notifikasi
			$('a.link-notifikasi').on('click', function(){
				var $this = $(this);
				var link = $this.data('link');

				var data = {
					notification_id: $this.data('notification-id'),
					client_id: $this.data('client-id'),
				}

				socket.emit('notification read', data);

				if(link){
					window.location = link;
				}
				
			});
		});
		})
	</script>


	<!-- load javascript -->
	<?=$this->template->buildJs('bottom');?>
	<!-- end of javascript  -->
</body>

</html>
