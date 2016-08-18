<?php
	
	$query2	= mysql_query("SELECT * FROM pelanggaran");

	$data2	= mysql_fetch_array($query2);
	$nis	= $data2['nis'];
	$query	= mysql_query("SELECT * FROM data where nis='$nis'");
	$data 	= mysql_fetch_array($query);
?>
<div class="row">
	<div class="col-md-12">
		<table>
			<thead>

			</thead>
			<tbody>
				<?php
					while ($data && $data2) {
						$nama=
						?>

						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<div class="row">

</div>