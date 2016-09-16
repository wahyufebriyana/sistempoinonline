<?php
	include "../../../../../php/koneksi.php";
?>
<div class="row margin-top-10">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
		<div class="dashboard-stat2">
			<div class="display">
				<div class="number">
					<h3 class="font-green-sharp">
						<?php
							$q = mysql_query("SELECT * FROM data where poin!=0");
							$s = mysql_query("SELECT * from data where status='siswa'");
							$rows = mysql_fetch_array($q);
							$per = round(mysql_num_rows($q)/mysql_num_rows($s)*100,2);

							echo mysql_num_rows($q);
						?>
					</h3>
					<small>PELANGGARAN</small>
				</div>
				<div class="icon">
					<i class="fa fa-frown-o"></i>
				</div>
			</div>
			<div class="progress-info">
				<div class="progress">
					<span style="width: <?php echo $per; ?>%;" class="progress-bar progress-bar-success green-sharp">
					<span class="sr-only"><?php echo $per; ?>% progress</span>
					</span>
				</div>
				<div class="status">
					<div class="status-title">
						 <a href="#/datatables/advanced.php">Lihat Detail</a>
					</div>
					<div class="status-number">
						 <?php echo $per; ?>%
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
		<div class="dashboard-stat2">
			<div class="display">
				<div class="number">
					<h3 class="font-blue-sharp">
						<?php
							$s = mysql_query("SELECT * FROM data where poin!=0");
							$q = mysql_query("SELECT * from data where poin>=25 and poin<50");
							$rows = mysql_fetch_array($q);
							$per = round(mysql_num_rows($q)/mysql_num_rows($s)*100,2);

							echo mysql_num_rows($q);
						?>
					</h3>
					<small>PERINGATAN I</small>
				</div>
				<div class="icon">
					<i class="fa fa-thumbs-o-down"></i>
				</div>
			</div>
			<div class="progress-info">
				<div class="progress">
					<span style="width: <?php echo $per; ?>%;" class="progress-bar progress-bar-success blue-sharp">
					<span class="sr-only"><?php echo $per; ?>% grow</span>
					</span>
				</div>
				<div class="status">
					<div class="status-title">
						 <a href="#" data-toggle="modal" data-target="#SK_I">Lihat Detail</a>
					</div>
					<div class="status-number">
						 <?php echo $per; ?>%
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
		<div class="dashboard-stat2">
			<div class="display">
				<div class="number">
					<h3 class="font-purple-soft">
						<?php
							$s = mysql_query("SELECT * FROM data where poin!=0");
							$q = mysql_query("SELECT * from data where poin>=50 and poin<80");
							$rows = mysql_fetch_array($q);
							$per = round(mysql_num_rows($q)/mysql_num_rows($s)*100,2);

							echo mysql_num_rows($q);
						?>
					</h3>
					<small>PERINGATAN II</small>
				</div>
				<div class="icon">
					<i class="fa fa-bomb"></i>
				</div>
			</div>
			<div class="progress-info">
				<div class="progress">
					<span style="width: <?php echo $per; ?>%;" class="progress-bar progress-bar-success purple-soft">
					<span class="sr-only"><?php echo $per; ?>% change</span>
					</span>
				</div>
				<div class="status">
					<div class="status-title">
						 <a href="#" data-toggle="modal" data-target="#SK_II">Lihat Detail</a>
					</div>
					<div class="status-number">
						 <?php echo $per; ?>%
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
		<div class="dashboard-stat2">
			<div class="display">
				<div class="number">
					<h3 class="font-red-haze">
						<?php
							$s = mysql_query("SELECT * FROM data where poin!=0");
							$q = mysql_query("SELECT * from data where poin>=80 and poin<100");
							$rows = mysql_fetch_array($q);
							$per = round(mysql_num_rows($q)/mysql_num_rows($s)*100,2);

							echo mysql_num_rows($q);
						?>
					</h3>
					<small>PERINGATAN III</small>
				</div>
				<div class="icon">
					<i class="fa fa-exclamation-triangle"></i>
				</div>
			</div>
			<div class="progress-info">
				<div class="progress">
					<span style="width: <?php echo $per; ?>%;" class="progress-bar progress-bar-success red-haze">
					<span class="sr-only"><?php echo $per; ?>% change</span>
					</span>
				</div>
				<div class="status">
					<div class="status-title">
						 <a href="#" data-toggle="modal" data-target="#SK_III">Lihat Detail</a>
					</div>
					<div class="status-number">
						 <?php echo $per; ?>%
					</div>
				</div>
			</div>
		</div>
	</div>
</div>