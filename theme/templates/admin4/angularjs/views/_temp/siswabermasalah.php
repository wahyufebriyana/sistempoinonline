<?php
	
	$q1 = mysql_query("SELECT * from pelanggaran where bulan='juli'");
	$r1 = mysql_num_rows($q1);
	$q2 = mysql_query("SELECT * from pelanggaran where bulan='agustus'");
	$r2 = mysql_num_rows($q2);
	$q3 = mysql_query("SELECT * from pelanggaran where bulan='september'");
	$r3 = mysql_num_rows($q3);
	$q4 = mysql_query("SELECT * from pelanggaran where bulan='oktober'");
	$r4 = mysql_num_rows($q4);
	$q5 = mysql_query("SELECT * from pelanggaran where bulan='november'");
	$r5 = mysql_num_rows($q5);
	$q6 = mysql_query("SELECT * from pelanggaran where bulan='desember'");
	$r6 = mysql_num_rows($q6);
	$q7 = mysql_query("SELECT * from pelanggaran where bulan='januari'");
	$r7 = mysql_num_rows($q7);
	$q8 = mysql_query("SELECT * from pelanggaran where bulan='februari'");
	$r8 = mysql_num_rows($q8);
	$q9 = mysql_query("SELECT * from pelanggaran where bulan='maret'");
	$r9 = mysql_num_rows($q9);
	$q10 = mysql_query("SELECT * from pelanggaran where bulan='april'");
	$r10 = mysql_num_rows($q10);
	$q11 = mysql_query("SELECT * from pelanggaran where bulan='mei'");
	$r11 = mysql_num_rows($q11);
	$q12 = mysql_query("SELECT * from pelanggaran where bulan='juni'");
	$r12 = mysql_num_rows($q12);
	$jumlah = $r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10+$r11+$r12;
	$p1 = round($r1/$jumlah*100,2);
	$p2 = round($r2/$jumlah*100,2);
	$p3 = round($r3/$jumlah*100,2);
	$p4 = round($r4/$jumlah*100,2);
	$p5 = round($r5/$jumlah*100,2);
	$p6 = round($r6/$jumlah*100,2);
	$p7 = round($r7/$jumlah*100,2);
	$p8 = round($r8/$jumlah*100,2);
	$p9 = round($r9/$jumlah*100,2);
	$p10 = round($r10/$jumlah*100,2);
	$p11 = round($r11/$jumlah*100,2);
	$p12 = round($r12/$jumlah*100,2);
?>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">Juli</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p1 ; ?>%;" class="progress-bar progress-bar-success">
				<?php echo $r1; ?> 
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">Agustus</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p2 ; ?>%;" class="progress-bar progress-bar-danger">
				<?php echo $r2; ?> 
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">September</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p3 ; ?>%;" class="progress-bar progress-bar-primary">
				<?php echo $r3; ?>
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">Oktober</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p4 ; ?>%;" class="progress-bar progress-bar-warning">
				<?php echo $r4; ?>
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">November</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p5 ; ?>%;" class="progress-bar progress-bar-success">
				<?php echo $r5; ?>
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">Desember</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p6 ; ?>%;" class="progress-bar progress-bar-danger">
				<?php echo $r6; ?>
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">Januari</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p7 ; ?>%;" class="progress-bar progress-bar-primary">
				<?php echo $r7; ?>
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">Februari</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p8 ; ?>%;" class="progress-bar progress-bar-warning">
				<?php echo $r8; ?>
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">Maret</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p9 ; ?>%;" class="progress-bar progress-bar-success">
				<?php echo $r9; ?>
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">April</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p10 ; ?>%;" class="progress-bar progress-bar-danger">
				<?php echo $r10; ?>
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">Mei</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p11 ; ?>%;" class="progress-bar progress-bar-primary">
				<?php echo $r11; ?>
			</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3" align="right" style="font-weight:bold;">Juni</div>
	<div class="col-md-9">
		<div class="progress active progress-striped">
			<span style="width: <?php echo $p12 ; ?>%;" class="progress-bar progress-bar-warning">
				<?php echo $r12; ?>
			</span>
		</div>
	</div>
</div>