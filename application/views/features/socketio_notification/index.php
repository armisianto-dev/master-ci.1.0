<script>

    // Enable pusher logging - don't include this in production
  //   Pusher.logToConsole = true;

  //   var pusher = new Pusher('24a1a5298f0c9aa416d8', {
  //     cluster: 'ap1',
  //     forceTLS: true
  //   });

  //   var channel = pusher.subscribe('notification');
  //   channel.bind('push-notification', function(data) {
  //     var html = `<a href="#" class="list-group-item">
		// 			            <h4 class="list-group-item-heading">`+data.title+`</h4>
		// 			            <p class="list-group-item-text">`+data.message+`</p>
		// 			        </a>`;
		// $('#list-notification').append(html);
  //   });
  </script>

<div id="page-title">
	<h1 class="page-header text-overflow">Socket.io Notification</h1>
</div>
<ol class="breadcrumb">
	<li><a href="<?=site_url()?>">Features</a></li>
	<li class="active">Socket.io Notification</li>
</ol>
<div id="page-content">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-mint">
				<div class="panel-heading">
					<h3 class="panel-title">Kirim Notifikasi</h3>
				</div>
				<form class="form-horizontal">
					<div class="panel-body">
					    <div class="row">
					        <div class="col-md-12 mar-btm">
					            <input type="text" name="title" class="form-control" placeholder="Judul Notifikasi">
					        </div>
					    </div>
					    <textarea placeholder="Message" name="message" rows="13" class="form-control mar-btm"></textarea>
					    <div class="row">
					        <div class="col-md-6 mar-btm">
					            <select class="form-control" name="client_id">
									<option value="USERDUMMY1" selected="">User 1</option>
									<option value="USERDUMMY2">User 2</option>
									<option value="USERDUMMY3">User 3</option>
								</select>
					        </div>
					        <div class="col-md-6 mar-btm">
					            <input type="text" name="group_id" class="form-control" placeholder="Group ID">
					        </div>
					    </div>
					</div>
					<div class="panel-footer text-right">
					    <button class="btn btn-default" id="sendNotification" type="button">Kirim Notifikasi</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-mint">
				<div class="panel-heading">
					<h3 class="panel-title">Terima Notifikasi</h3>
				</div>
				<div class="panel-body">
						<div class="pad-btm form-inline">
							<div class="row">
								<div class="col-md-6">
									
								</div>
								<div class="col-md-6 table-toolbar-right">
									<input type="hidden" name="selected_user input-sm" value="USERDUMMY1">
									<select id="select-user" class="form-control">
										<option value="USERDUMMY1" <?php if ($selected_user == 'USERDUMMY1') : echo 'selected=""'; endif; ?>>User 1</option>
										<option value="USERDUMMY2" <?php if ($selected_user == 'USERDUMMY2') : echo 'selected=""'; endif; ?>>User 2</option>
										<option value="USERDUMMY3" <?php if ($selected_user == 'USERDUMMY3') : echo 'selected=""'; endif; ?>>User 3</option>
									</select>
								</div>
							</div>
						</div>
					   <div class="list-group" id="list-notification">
					   </div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		$('#select-user').on('change', function(){
			window.location = '<?= site_url() ?>features/socketio_notification?userid=' + $(this).val();
		})

		var socket = io.connect('http://localhost:3000');
		
		// on Load 
		socket.emit('notification load', {client_id : '<?= $selected_user; ?>'});

		$('#sendNotification').on('click', function(){
			var $this = $(this);
			var data = {
					title : $('input[name="title"]').val(),
					message : $('textarea[name="message"]').val(),
					client_id : $('select[name="client_id"]').val(),
					group_id : $('input[name="group_id"]').val(),
				}
			socket.emit('notification added', data);
		})

		// Terima Notifikasi
		socket.on('<?= $selected_user ?>', function(result){
			var totalNotifikasi = result.totalNotification,
				listNotifikasi = result.listNotification;


			var html = '';	
				listNotifikasi.forEach(function(data){
					html += `<a href="javascript:void(0)" class="list-group-item link-notifikasi" data-notification-id="`+data.notification_id+`" data-client-id="`+data.client_id+`" data-link="`+data.link+`">
					            <h4 class="list-group-item-heading">`+data.title+`</h4>
					            <p class="list-group-item-text">`+data.message+`</p>
					        </a>`;
				})
			    
			$('#list-notification').html(html);

			// Baca Notifikasi
			$('a.link-notifikasi').on('click', function(){
				var $this = $(this);
				var link = $this.data('link');

				var data = {
					notification_id: $this.data('notification-id'),
					client_id: $this.data('client-id'),
				}

				if(link){
					window.location = link;
				}

				socket.emit('notification read', data);
			});
		});

	});
</script>
