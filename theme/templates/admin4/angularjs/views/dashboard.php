<?php
	include "../../../../../php/koneksi.php";
	$query = mysql_query("SELECT * from aplikasi");
	$row = mysql_fetch_array($query);
	$tahun = $row['tahun'];
	$tahun2 = $tahun+1;
?>
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
		<div class="col-md-6 col-sm-12 col-xs-12">
			<!-- BEGIN PORTLET-->
			<div class="portlet light ">
				<div class="portlet-title">
					<div class="caption caption-md">
						<i class="icon-bar-chart font-green-haze hide"></i>
						<span class="caption-subject font-green-haze bold uppercase">Grafik Pelanggaran Tahun <?php echo $tahun; echo "/"; echo $tahun2; ?></span>
						<span class="caption-helper hide">weekly stats...</span>
					</div>
				</div>
				<div class="portlet-body">
					<?php include "_temp/siswabermasalah.php"; ?>
					
				</div>
			</div>
			<!-- END PORTLET-->
		</div>
		<?php
			include "pelanggaranbaru/pelanggaranbaru.php";
		?>
	</div>
</div>
<?php
	include "_temp/modal.php"
?>
<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS & CSS -->
<?php include "pelanggaranbaru/script.php"; ?>

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
	$(function(){
		var oTable = $('#sample_1').DataTable();
	});
</script>
<!-- BEGIN MAIN JS & CSS -->