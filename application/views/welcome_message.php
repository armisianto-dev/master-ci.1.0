<div id="page-title">
	<h1 class="page-header text-overflow">Welcome</h1>
</div>
<ol class="breadcrumb">
	<li><a href="<?=site_url()?>">Dashboard</a></li>
	<li class="active">Welcome</li>
</ol>
<div id="page-content">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-mint">
				<div class="panel-heading">
					<h3 class="panel-title">Welcome</h3>
				</div>
				<div class="panel-body">
					<select class="selectpicker" multiple>
						<option>HTML</option>
						<option>CSS</option>
						<option>jQuery</option>
						<option>Javascript</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('select').selectpicker({
		liveSearch: true
	});
})
</script>
