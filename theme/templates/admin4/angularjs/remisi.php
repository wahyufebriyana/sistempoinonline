<?php
	include "../../../../php/koneksi.php";
	$tanggal 	= $_POST['tanggal'];
	$nis 		= $_POST['nis'];
	$bulan 		= $_POST['bulan'];
	$tahun 		= $_POST['tahun'];
	$jumlah 	= $_POST['jumlah'];
	$koderemisi = $_POST['koderemisi'];
	$keterangan = $_POST['keterangan'];
	$query 		= mysql_query("SELECT * from data where nis='$nis'");
	$query2 	= mysql_query("SELECT * from listremisi where kode='$koderemisi'");
	$data 		= mysql_fetch_array($query);
	$tambahan 	= mysql_fetch_array($query2);
	$a 			= $data['poin'];
	$b 			= $tambahan['nilai'];
	$c			= $b*$jumlah;
	if ($a < $c) {
		$new = 0;
	}else{
		$new 	= $a-$c;
	}
	$poin 		= mysql_query("UPDATE data set poin='$new' where nis='$nis'");
	$input 		= mysql_query("INSERT INTO remisi VALUES('$nis','$tanggal','$bulan','$tahun','$koderemisi','$jumlah','$keterangan','')");
	if ($input && $poin) {
   		?>
   			<script type="text/javascript">
   				alert('Remisi berhasil ditambahkan!');
            	document.location='../angularjs/#/datatables/advanced.php';
   			</script>
   		<?php
	} else {
    	echo "gagal";
	}
	// echo $nis; echo $tanggal; echo $bulan; echo $tahun; echo $jumlah; echo $keterangan;
?>