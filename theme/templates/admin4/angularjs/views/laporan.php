<?php include "../../../../../php/koneksi.php" ?>
<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb hide">
	<li>
		<a href="#">Home</a><i class="fa fa-circle"></i>
	</li>
	<li class="active">
		Laporan
	</li>
</ul>
<!-- END PAGE BREADCRUMB -->
<!-- BEGIN MAIN CONTENT -->
<div ng-controller="DashboardController" class="margin-top-10">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<!-- BEGIN PORTLET-->
			<div class="portlet light ">
				<div class="portlet-title">
					<div class="caption caption-md">
						<i class="icon-bar-chart font-green-haze hide"></i>
						<span class="caption-subject font-green-haze bold uppercase">Daftar Pelanggaran</span>
					</div>
				</div>
				<div class="portlet-body">
					<?php include "_temp/pelanggaran.php"; ?>
				</div>
			</div>
			<!-- END PORTLET-->
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS & CSS -->

<script>
	// Index.init();    
	// Tasks.initDashboardWidget();
	TableAdvanced.init();
</script>
<!-- BEGIN MAIN JS & CSS -->