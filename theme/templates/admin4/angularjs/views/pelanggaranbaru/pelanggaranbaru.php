<?php
$query = mysql_query("SELECT * FROM listpoin where nomor=0");
$q = mysql_query("SELECT * FROM data where status='siswa'");
$tmpl = mysql_query("SELECT tahun from aplikasi");
$row = mysql_fetch_array($tmpl);
$tahun = $row['tahun'];

?>
<div class="col-md-6 col-sm-6">
	<!-- BEGIN REGIONAL STATS PORTLET-->
	<div class="portlet light ">
		<div class="portlet-title">
			<div class="caption">
				<i class="icon-share font-green-haze"></i>
				<span class="caption-subject font-green-haze bold uppercase">Pelanggaran Baru</span>
			</div>
			<div class="actions">
				<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#">
				</a>
			</div>
		</div>
		<div class="form-body">
			<form action="#/tambah.php" method="POST">
				<div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"><label>Tanggal</label></div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-3">
										<input name="tanggal" class="form-control">
									</div>
									<div class="col-md-5">
										<select name="bulan" class="form-control">
											<option value="januari">Januari</option>
											<option value="februari">Februari</option>
											<option value="maret">Maret</option>
											<option value="april">April</option>
											<option value="mei">Mei</option>
											<option value="juni">Juni</option>
											<option value="juli">Juli</option>
											<option value="agustus">Agustus</option>
											<option value="september">September</option>
											<option value="oktober">Oktober</option>
											<option value="november">November</option>
											<option value="desember">Desember</option>
										</select>
									</div>
									<div name="tahun" class="col-md-4">
										<input class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"><label>Nama</label></div>
							<div class="col-md-9">
								<select name="nis" class="form-control select2me" data-placeholder="Select...">
	                                <option value=""></option>
		                                <?php while ( $r = mysql_fetch_array($q)) { 
		                                	if ($tahun-1 == $r['tahun']) {
			                                    $kelas = 'XI';
			                                }else if ($tahun-3 == $r['tahun']){
			                                    $kelas = 'Lulus';
			                                }else if ($tahun-1 > $r['tahun']) {
			                                    $kelas = 'XII';
			                                }else if ($tahun-1 < $r['tahun']) {
			                                    $kelas = 'X';
			                                }
		                                ?>
	                                <option id="<?php echo $r['nis']; ?>" value="<?php echo $r['nis']; ?>"><?php echo $r['nama']; ?> (<?php echo $kelas; ?> <?php echo $r['kelas']; ?>)</option>
		                                <?php } ?>
	                            </select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"><label>Jenis Pelanggaran</label></div>
							<div class="col-md-9">
								<select name="jenis" id="jenis" class="demoInputBox form-control">
	                                <option value="">Select Jenis</option>
		                                <?php while ( $results = mysql_fetch_array($query)) { ?>
	                                <option id="<?php echo $results['jenis']; ?>" value="<?php echo $results['jenis']; ?>"><?php echo $results['urai']; ?></option>
		                                <?php } ?>
	                            </select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"><label>Pelanggaran</label></div>
							<div class="col-md-9">
								<select name="pelanggaran" id="pelanggaran-list" class="form-control demoInputBox">
	                            	<option value="">Select Pelanggaran</option>
	                        </select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-9">
								<button type="submit" class="btn btn-success">Simpan</button> 
								<button type="reset" class="btn btn-danger">Batal</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END REGIONAL STATS PORTLET-->

</div>
<?php include "script.php"; ?>
<script>
	Index.init();    
	Tasks.initDashboardWidget();
</script>