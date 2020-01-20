
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
					        <!-- <div class="col-md-6 mar-btm">
					            <input type="text" name="group_id" class="form-control" placeholder="Group ID">
					        </div> -->
					        <div class="com-md-12 mar-btm">
					        	<input type="text" class="form-control" name="link" placeholder="Link">
					        </div>
					    </div>
					</div>
					<div class="panel-footer text-right">
					    <button class="btn btn-default" id="sendNotification" type="button">Kirim Notifikasi</button>
					</div>
				</form>
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

		$('#sendNotification').on('click', function(){
			var $this = $(this);
			var data = {
					title : $('input[name="title"]').val(),
					message : $('textarea[name="message"]').val(),
					client_id : $('select[name="client_id"]').val(),
					link : $('input[name="link"]').val(),
				}
			socket.emit('notification added', data);
		});
		

	});
</script>
