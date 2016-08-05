<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb hide">
	<li>
		<a href="#">Home</a><i class="fa fa-circle"></i>
	</li>
	<li class="active">
		Dashboard
	</li>
</ul>
<!-- END PAGE BREADCRUMB -->
<!-- BEGIN MAIN CONTENT -->
<div ng-controller="DashboardController" class="margin-top-10">
	<?php
		include "_temp/persentase.php";
	?>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<!-- BEGIN PORTLET-->
			<div class="portlet light ">
				<div class="portlet-title">
					<div class="caption caption-md">
						<i class="icon-bar-chart font-green-haze hide"></i>
						<span class="caption-subject font-green-haze bold uppercase">Sales Summary</span>
						<span class="caption-helper hide">weekly stats...</span>
					</div>
					<div class="actions">
						<div class="btn-group btn-group-devided" data-toggle="buttons">
							<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
							<input type="radio" name="options" class="toggle" id="option1">Today</label>
							<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
							<input type="radio" name="options" class="toggle" id="option2">Week</label>
							<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
							<input type="radio" name="options" class="toggle" id="option2">Month</label>
						</div>
					</div>
				</div>
				<div class="portlet-body">
					<div class="row list-separated">
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="font-grey-mint font-sm">
								Total Sales
							</div>
							<div class="uppercase font-hg font-red-flamingo">
								13,760 <span class="font-lg font-grey-mint">$</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="font-grey-mint font-sm">
								Revenue
							</div>
							<div class="uppercase font-hg font-green-haze">
								4,760 <span class="font-lg font-grey-mint">$</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="font-grey-mint font-sm">
								Expenses
							</div>
							<div class="uppercase font-hg font-purple">
								11,760 <span class="font-lg font-grey-mint">$</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="font-grey-mint font-sm">
								Growth
							</div>
							<div class="uppercase font-hg font-blue-sharp">
								9,760 <span class="font-lg font-grey-mint">$</span>
							</div>
						</div>
					</div>
					<ul class="list-separated list-inline-xs hide">
						<li>
							<div class="font-grey-mint font-sm">
								Total Sales
							</div>
							<div class="uppercase font-hg font-red-flamingo">
								13,760 <span class="font-lg font-grey-mint">$</span>
							</div>
						</li>
						<li>
						</li>
						<li class="border">
							<div class="font-grey-mint font-sm">
								Revenue
							</div>
							<div class="uppercase font-hg font-green-haze">
								4,760 <span class="font-lg font-grey-mint">$</span>
							</div>
						</li>
						<li class="divider">
						</li>
						<li>
							<div class="font-grey-mint font-sm">
								Expenses
							</div>
							<div class="uppercase font-hg font-purple">
								11,760 <span class="font-lg font-grey-mint">$</span>
							</div>
						</li>
						<li class="divider">
						</li>
						<li>
							<div class="font-grey-mint font-sm">
								Growth
							</div>
							<div class="uppercase font-hg font-blue-sharp">
								9,760 <span class="font-lg font-grey-mint">$</span>
							</div>
						</li>
					</ul>
					<div id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 260px">
					</div>
				</div>
			</div>
			<!-- END PORTLET-->
		</div>
		<?php
			include "_temp/pelanggaranbaru.php";
		?>
	</div>
</div>
<?php
	include "_temp/modal.php"
?>
<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS & CSS -->
<script>
	Index.init();    
	Tasks.initDashboardWidget();
</script>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="../../../../../js/datatable.min.js"></script>
<script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
    })
    $('#pilih').click(function(){
         // alert($('input[name="wp"]:checked','#mw_form').val()); 
        var cari = $('input[name="wp"]:checked','#mw_form').val();
        $('#cari').val(cari);
        $('#myModal').modal('hide');
    });
</script>
<script type="text/javascript">
    	$(document).ready(function(){
		$('#pelanggaran').DataTable();
	});
</script>
<!-- BEGIN MAIN JS & CSS -->