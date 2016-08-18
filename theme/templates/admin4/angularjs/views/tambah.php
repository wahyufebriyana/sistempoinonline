<?php
	include "../../../../php/koneksi.php";
	$tanggal = $_POST['tanggal'];
	$nis = $_POST['nis'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$jenis = $_POST['jenis'];
	$nomor = $_POST['nomor'];
	$query = mysql_query("SELECT * from data where nis='$nis'");
	$query2 = mysql_query("SELECT * from listpoin where jenis='$jenis' and nomor='$nomor'");
	$data = mysql_fetch_array($query);
	$tambahan = mysql_fetch_array($query2);
	$a = $data['poin'];
	$b = $tambahan['poin'];
	$new = $a+$b;
	$poin = mysql_query("UPDATE data set poin='$new' where nis='$nis'");
	$input = mysql_query("INSERT INTO pelanggaran VALUES('$nis','$tanggal','$bulan','$tahun','$jenis','$nomor','')");
	if ($input && $poin) {
   		?>
   			<script type="text/javascript">
   				alert('Data pelanggaran baru berhasil ditambahkan!');
            	document.location='../angularjs';
   			</script>
   		<?php
	} else {
    	echo "gagal";
	}
	// echo $nis; echo $tanggal; echo $bulan; echo $tahun; echo $jenis; echo $nomor;
?>