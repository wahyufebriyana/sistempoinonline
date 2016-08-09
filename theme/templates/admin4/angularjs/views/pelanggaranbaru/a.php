<?php
	$query = mysql_query("SELECT * from listpoin where nomor!=0 and jenis='A'");
	while ($row = mysql_fetch_array($query)) {
		echo "<option value=".$row['id'].">".$row['urai']."</option>"

	}
?>
