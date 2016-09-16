<?php
	$query = mysql_query("SELECT * from pelanggaran order by id desc");
?>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<table class="table table-bordered table-striped table-hover dataTables" id="sample_1">
			<thead>
				<th hidden></th>
				<th><center>Tanggal</center></th>
				<th><center>Nama</center></th>
				<th><center>Kelas</center></th>
				<th><center>Pelanggaran</center></th>
				<th><center>Poin</center></th>
				<th><center>Ket.</center></th>
				<th><center>Aksi</center></th>
			</thead>
			<tbody>
				<?php
					while ($data = mysql_fetch_array($query)) {
						$tanggal = $data['tanggal'];
						$bulan = $data['bulan'];
						$tahun = $data['tahun'];
						$nis = $data['nis'];
						$query2 = mysql_query("SELECT * from data where nis='$nis'");
						$data2 = mysql_fetch_array($query2);
						$nama = $data2['nama'];
						$jenis = $data['jenis'];
						$nomor = $data['nomor'];
						$query3 = mysql_query("SELECT * from listpoin where jenis='$jenis' and nomor='$nomor'");
						$data3 = mysql_fetch_array($query3);
						?>
							<tr>
								<td hidden><?php echo $data['id']; ?></td>
								<td align="center"><?php echo $tanggal; ?> <?php echo $bulan; ?> <?php echo $tahun; ?></td>
								<td><?php echo $nama; ?></td>
								<td align="center"></td>
								<td align="center" title="<?php echo $data3['urai']; ?>"><?php echo $jenis; ?>-<?php echo $nomor; ?></td>
								<td align="center"><?php echo $data3['poin']; ?></td>
								<td align="center"><font color="red"><i>Belum</i></td>
								<td align="center"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $data['id']; ?>" title="SMS ke Orang Tua <?php echo $nama;?>"><i class="fa fa-envelope-o"></i></button></td>
							</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php
$queri = mysql_query("SELECT * from pelanggaran");
while ($row = mysql_fetch_array($queri)) {
	$tanggal = $row['tanggal'];
	$bulan = $row['bulan'];
	$tahun = $row['tahun'];
	$id = $row['id'];
	$nis = $row['nis'];
	$queri2 = mysql_query("SELECT * from data where nis='$nis'");
	$row2 = mysql_fetch_array($queri2);
	$nama = $row2['nama'];
	$nohp = $row2['hportu'];
	$jenis = $row['jenis'];
	$nomor = $row['nomor'];
	$queri3 = mysql_query("SELECT * from listpoin where jenis='$jenis' and nomor='$nomor'");
	$row3 = mysql_fetch_array($queri3);

	?>
<div class="modal fade" id="<?php echo $row['id']; ?>" data-backdrop="static" data-keyboard="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md">
    <form class="modal-content noborder-radius" id="mw_form" action="javascript:void(0);">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">SMS ke orang tua/ wali <?php echo $nama; ?></h4>
          </div>
          <div class="note note-success note-bordered">
			
		</div>
          <div class="modal-body">
            <div class="portlet dark">
                <div class="row">
                	<div class="col-md-6 col-md-6 col-xs-6">
                		<div class="portlet-title">
                			<div class="caption caption-md">
								<i class="fa fa-envelope-o"></i>
								<span class="caption-subject font-green-haze bold uppercase"> Copy Pesan Ini</span>
							</div>
                		</div>
                		<hr>
                		<div class="portlet-body">
	                		<form action="" method="post">	
	                			<div hidden class="form-group">
	                				<div class="row">
	                					<div class="col-md-3">ID</div>
	                					<div class="col-md-9">
	                						<input class="form-control" disabled="disabled" name="id" value="<?php echo $id; ?>">
	                					</div>
	                				</div>
	                			</div>
	                			<div class="form-group">
	                				<div class="row">
	                					<div class="col-md-3">No. Telepon</div>
	                					<div class="col-md-9">
	                						<input class="form-control" disabled="disabled" name="nohp" value="<?php echo $nohp; ?>">
	                					</div>
	                				</div>
	                			</div>
	                			<div class="form-group">
	                				<div class="row">
	                					<div class="col-md-3">Isi Pesan</div>
	                					<div class="col-md-9">
	                						<textarea class="form-control" name="pesan" disabled="disabled" max="160">[INFO] Siswa <?php echo $nama; ?> pada <?php echo $tanggal; ?> <?php echo $bulan; ?> <?php echo $tahun; ?>, <?php echo $row3['urai']; ?></textarea>
	                					</div>
	                				</div>
	                			</div>
	                		</form>
                		</div>
                	</div>
                	<div class="col-md-6 col-md-6 col-xs-6">
                		<div class="portlet-title">
                			<div class="caption caption-md">
								<i class="fa fa-envelope-o"></i>
								<span class="caption-subject font-green-haze bold uppercase"> Paste Pesan Disini</span>
							</div>
                		</div>
                		<hr>
                		<div class="portlet-body">
                			<iframe src="http://smsgratis.web.id/wg3/?teks=Kesiswaan-SMKN2Wonosari" class="form-control select2me" frameborder="0" style="height:200px;width:100%;"></iframe>
                		</div>
                	</div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
          	<button type="submit" class="btn btn-success"><i class="fa fa-save"> Selesai</i></button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"> Batal</i></button>
          </div>
        </div>
    </form>
  </div>
</div>
<?php } ?>
<script type="text/javascript">
	$(function(){
		var oTable = $('#sample_2').DataTable();
	});
</script>
<!-- BEGIN MAIN JS & CSS -->