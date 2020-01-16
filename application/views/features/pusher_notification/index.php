<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('24a1a5298f0c9aa416d8', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('notification');
    channel.bind('push-notification', function(data) {
      var html = `<a href="#" class="list-group-item">
					            <h4 class="list-group-item-heading">`+data.title+`</h4>
					            <p class="list-group-item-text">`+data.message+`</p>
					        </a>`;
		$('#list-notification').append(html);
    });
  </script>

<div id="page-title">
	<h1 class="page-header text-overflow">Pusher Notification</h1>
</div>
<ol class="breadcrumb">
	<li><a href="<?=site_url()?>">Features</a></li>
	<li class="active">Pusher Notification</li>
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
					    <textarea placeholder="Message" name="message" rows="13" class="form-control"></textarea>
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
					   <div class="list-group" id="list-notification">
					   </div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		$('#sendNotification').on('click', function(){
			var $this = $(this);
			$.ajax({
				method: "POST",
				url: "<?=site_url()?>features/pusher_notification/send_notification",
				data: {
					title : $('input[name="title"]').val(),
					message : $('textarea[name="message"]').val(),
				},
				dataType: "JSON",
				beforeSend: function(xhr) {
					$this.html('<i class="fa fa-spin fa-spinner"></i> Mengirim');
				},
				success: function(result) {
					$this.html('Kirim Notifikasi');
				}
			})
		})

	});
</script>
