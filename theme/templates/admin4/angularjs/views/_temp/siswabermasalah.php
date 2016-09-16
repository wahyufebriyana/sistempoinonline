<div id="container"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			<div class="col-md-6 col-md-offset-6">
				<button class="btn btn-primary">Lihat Selengkapnya</button>
			</div>
		</div>
	</div>
</div>
<?php
	$query = mysql_query("SELECT * from aplikasi");
	$result = mysql_fetch_array($query);
	$tahun = $result['tahun']-1;

	$qx1 = mysql_query("SELECT * from pelanggaran where bulan='juli' and th_pel>$tahun");
	$x1 = mysql_num_rows($qx1);
	$qx2 = mysql_query("SELECT * from pelanggaran where bulan='agustus' and th_pel>$tahun");
	$x2 = mysql_num_rows($qx2);
	$qx3 = mysql_query("SELECT * from pelanggaran where bulan='september' and th_pel>$tahun");
	$x3 = mysql_num_rows($qx3);
	$qx4 = mysql_query("SELECT * from pelanggaran where bulan='oktober' and th_pel>$tahun");
	$x4 = mysql_num_rows($qx4);
	$qx5 = mysql_query("SELECT * from pelanggaran where bulan='november' and th_pel>$tahun");
	$x5 = mysql_num_rows($qx5);
	$qx6 = mysql_query("SELECT * from pelanggaran where bulan='desember' and th_pel>$tahun");
	$x6 = mysql_num_rows($qx6);
	$qx7 = mysql_query("SELECT * from pelanggaran where bulan='januari' and th_pel>$tahun");
	$x7 = mysql_num_rows($qx7);
	$qx8 = mysql_query("SELECT * from pelanggaran where bulan='februari' and th_pel>$tahun");
	$x8 = mysql_num_rows($qx8);
	$qx9 = mysql_query("SELECT * from pelanggaran where bulan='maret' and th_pel>$tahun");
	$x9 = mysql_num_rows($qx9);
	$qx10 = mysql_query("SELECT * from pelanggaran where bulan='april' and th_pel>$tahun");
	$x10 = mysql_num_rows($qx10);
	$qx11 = mysql_query("SELECT * from pelanggaran where bulan='mei' and th_pel>$tahun");
	$x11 = mysql_num_rows($qx11);
	$qx12 = mysql_query("SELECT * from pelanggaran where bulan='juni' and th_pel>$tahun");
	$x12 = mysql_num_rows($qx12);

	$qxi1 = mysql_query("SELECT * from pelanggaran where bulan='juli' and th_pel=$tahun");
	$xi1 = mysql_num_rows($qxi1);
	$qxi2 = mysql_query("SELECT * from pelanggaran where bulan='agustus' and th_pel=$tahun");
	$xi2 = mysql_num_rows($qxi2);
	$qxi3 = mysql_query("SELECT * from pelanggaran where bulan='september' and th_pel=$tahun");
	$xi3 = mysql_num_rows($qxi3);
	$qxi4 = mysql_query("SELECT * from pelanggaran where bulan='oktober' and th_pel=$tahun");
	$xi4 = mysql_num_rows($qxi4);
	$qxi5 = mysql_query("SELECT * from pelanggaran where bulan='november' and th_pel=$tahun");
	$xi5 = mysql_num_rows($qxi5);
	$qxi6 = mysql_query("SELECT * from pelanggaran where bulan='desember' and th_pel=$tahun");
	$xi6 = mysql_num_rows($qxi6);
	$qxi7 = mysql_query("SELECT * from pelanggaran where bulan='januari' and th_pel=$tahun");
	$xi7 = mysql_num_rows($qxi7);
	$qxi8 = mysql_query("SELECT * from pelanggaran where bulan='februari' and th_pel=$tahun");
	$xi8 = mysql_num_rows($qxi8);
	$qxi9 = mysql_query("SELECT * from pelanggaran where bulan='maret' and th_pel=$tahun");
	$xi9 = mysql_num_rows($qxi9);
	$qxi10 = mysql_query("SELECT * from pelanggaran where bulan='april' and th_pel=$tahun");
	$xi10 = mysql_num_rows($qxi10);
	$qxi11 = mysql_query("SELECT * from pelanggaran where bulan='mei' and th_pel=$tahun");
	$xi11 = mysql_num_rows($qxi11);
	$qxi12 = mysql_query("SELECT * from pelanggaran where bulan='juni' and th_pel=$tahun");
	$xi12 = mysql_num_rows($qxi12);

	$qxii1 = mysql_query("SELECT * from pelanggaran where bulan='juli' and th_pel<$tahun");
	$xii1 = mysql_num_rows($qxii1);
	$qxii2 = mysql_query("SELECT * from pelanggaran where bulan='agustus' and th_pel<$tahun");
	$xii2 = mysql_num_rows($qxii2);
	$qxii3 = mysql_query("SELECT * from pelanggaran where bulan='september' and th_pel<$tahun");
	$xii3 = mysql_num_rows($qxii3);
	$qxii4 = mysql_query("SELECT * from pelanggaran where bulan='oktober' and th_pel<$tahun");
	$xii4 = mysql_num_rows($qxii4);
	$qxii5 = mysql_query("SELECT * from pelanggaran where bulan='november' and th_pel<$tahun");
	$xii5 = mysql_num_rows($qxii5);
	$qxii6 = mysql_query("SELECT * from pelanggaran where bulan='desember' and th_pel<$tahun");
	$xii6 = mysql_num_rows($qxii6);
	$qxii7 = mysql_query("SELECT * from pelanggaran where bulan='januari' and th_pel<$tahun");
	$xii7 = mysql_num_rows($qxii7);
	$qxii8 = mysql_query("SELECT * from pelanggaran where bulan='februari' and th_pel<$tahun");
	$xii8 = mysql_num_rows($qxii8);
	$qxii9 = mysql_query("SELECT * from pelanggaran where bulan='maret' and th_pel<$tahun");
	$xii9 = mysql_num_rows($qxii9);
	$qxii10 = mysql_query("SELECT * from pelanggaran where bulan='april' and th_pel<$tahun");
	$xii10 = mysql_num_rows($qxii10);
	$qxii11 = mysql_query("SELECT * from pelanggaran where bulan='mei' and th_pel<$tahun");
	$xii11 = mysql_num_rows($qxii11);
	$qxii12 = mysql_query("SELECT * from pelanggaran where bulan='juni' and th_pel<$tahun");
	$xii12 = mysql_num_rows($qxii12);
?>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Banyaknya pelanggaran Per Bulan'
        },
        subtitle: {
            text: 'SMK Negeri 2 Wonosari'
        },
        xAxis: {
            categories: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        },
        yAxis: {
            title: {
                text: 'Jumlah Pelanggaran'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'X',
            data: [<?php echo $x1; ?>, <?php echo $x2; ?>, <?php echo $x3; ?>, <?php echo $x4; ?>, <?php echo $x5; ?>, <?php echo $x6; ?>, <?php echo $x7; ?>, <?php echo $x8; ?>, <?php echo $x9; ?>, <?php echo $x10; ?>, <?php echo $x11; ?>, <?php echo $x12; ?>]
        }, {
            name: 'XI',
            data: [<?php echo $xi1; ?>, <?php echo $xi2; ?>, <?php echo $xi3; ?>, <?php echo $xi4; ?>, <?php echo $xi5; ?>, <?php echo $xi6; ?>, <?php echo $xi7; ?>, <?php echo $xi8; ?>, <?php echo $xi9; ?>, <?php echo $xi10; ?>, <?php echo $xi11; ?>, <?php echo $xi12; ?>]
        }, {
            name: 'XII',
            data: [<?php echo $xii1; ?>, <?php echo $xii2; ?>, <?php echo $xii3; ?>, <?php echo $xii4; ?>, <?php echo $xii5; ?>, <?php echo $xii6; ?>, <?php echo $xii7; ?>, <?php echo $xii8; ?>, <?php echo $xii9; ?>, <?php echo $xii10; ?>, <?php echo $xii11; ?>, <?php echo $xii12; ?>]
        }]
    });
});
</script>