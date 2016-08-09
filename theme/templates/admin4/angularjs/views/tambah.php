<?php
    //Kirimkan Variabel
include "../../../../../php/koneksi.php"
   $tanggal = $_POST['tanggal'];
   $bulan = $_POST['bulan'];
   $tahun = $_POST['tahun'];
   $nis = $_POST['nis'];
   $jenis = $_POST['jenis'];
   $pelanggaran = $_POST['pelanggaran'];
    $q = mysql_query("SELECT * from data where nis=$nis");
    $r = mysql_fetch_array($q);
    $tmpl = mysql_query("SELECT * from listpoin where jenis=$jenis and nomor=$pelanggaran");
    $row = mysql_fetch_array($tmpl);
    $poin = $r['poin'];
    $asal = $row['poin'];
    $tambahpoin = $asal+$poin;
    //input data ke table mahasiswa dalam database akademik
    $tambah  = mysql_query("update data where nis='$nis' set poin='$tambahpoin'");

    $input  ="INSERT INTO pelanggaran (nis,tanggal,bulan,tahun,pelanggaran)
            VALUES ('$nis','$tanggal','$bulan','$tahun','$pelanggaran')";
    $query_input =mysql_query($input);
        if ($query_input) {
    //Jika Sukses
    echo '<meta http-equiv="refresh" content="0; #/dashboard.php">';
    }else {
    //Jika Gagal
    echo "Data Anda Gagal diinput, Silahkan diulangi!";
    }
    //Tutup koneksi engine MySQL
    mysql_close($Open);
?>
