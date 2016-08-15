<ul class="page-breadcrumb breadcrumb">
	<li>
		<a href="#">Home</a><i class="fa fa-circle"></i>
	</li>
	<li class="active">
		Daftar Siswa Bermasalah
	</li>
</ul>
<!-- END PAGE BREADCRUMB -->

<!-- BEGIN MAIN CONTENT -->
<div class="row">
	<div class="col-md-7">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>Daftar Siswa Bermasalah
				</div>
				<div class="tools">
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover" id="sample_1">
					<thead>
                    
                        <th class="text-center">Nama</th>
                        <th class="text-center">NIS</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Poin</th>
                        <th class="text-center">Keterangan</th>
                        <!-- <th class="text-center"></th> -->
                    
                	</thead>
					<tbody>
                    
                        <?php
                        	include "../../../../../../php/koneksi.php";
                            $mysql = mysql_query("SELECT tahun from aplikasi");
                            $row = mysql_fetch_array($mysql);
                            $sql = mysql_query("SELECT * FROM data WHERE poin!=0 and status='siswa' ORDER BY nis desc");
                            $tahun = $row['tahun'];

                            $i = 0;
                            while($data = mysql_fetch_array($sql)){
                                $poin = $data['poin'];
                                if ($poin <= 25) {
                                    $ket = '-';
                                }else if ($poin >= 25 and $poin < 50) {
                                    $ket = 'SP-I';
                                }else if ($poin >= 50 and $poin < 80) {
                                    $ket = 'SP-II';
                                }else if ($poin >= 80 and $poin < 100) {
                                    $ket = 'SP-III';
                                }else if ($poin >= 100) {
                                    $ket = 'Drop Out';
                                }
                                if ($tahun-1 == $data['tahun']) {
                                    $kelas = 'XI';
                                }else if ($tahun-3 == $data['tahun']){
                                    $kelas = 'Lulus';
                                }else if ($tahun-1 > $data['tahun']) {
                                    $kelas = 'XII';
                                }else if ($tahun-1 < $data['tahun']) {
                                    $kelas = 'X';
                                }

                                
                                $i++;
                                echo "<td>".$data['nama']."</td>
                                     <td class='text-center'>".$data['nis']."</td>
                                     <td class='text-center'>".$kelas." ".$data['kelas']."</td>
                                     <td class='text-center'>" .$data['poin']."</td>
                                     <td>".$ket."</td></tr>";

                            }
                        ?>
                    
                	</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<!-- <div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>Datatable with TableTools
				</div>
				<div class="tools">
					<a href="javascript:;" class="reload">
					</a>
					<a href="javascript:;" class="remove">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover" id="sample_2">
					<thead>
						<tr>
							<th>
								Rendering engine
							</th>
							<th>
								Browser
							</th>
							<th>
								Platform(s)
							</th>
							<th>
								Engine version
							</th>
							<th>
								CSS grade
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 4.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								4
							</td>
							<td>
								X
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5
							</td>
							<td>
								C
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.5
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 6
							</td>
							<td>
								Win 98+
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 7
							</td>
							<td>
								Win XP SP2+
							</td>
							<td>
								7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								AOL browser (AOL desktop)
							</td>
							<td>
								Win XP
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.5
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 2.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 3.0
							</td>
							<td>
								Win 2k+ / OSX.3+
							</td>
							<td>
								1.9
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.0
							</td>
							<td>
								OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.5
							</td>
							<td>
								OSX.3+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape 7.2
							</td>
							<td>
								Win 95+ / Mac OS 8.6-9.2
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Browser 8
							</td>
							<td>
								Win 98SE+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Navigator 9
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.1
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.2
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.2
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.3
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.4
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.4
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.5
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.6
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.7
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.8
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Seamonkey 1.1
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Epiphany 2.20
							</td>
							<td>
								Gnome
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.2
							</td>
							<td>
								OSX.3
							</td>
							<td>
								125.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.3
							</td>
							<td>
								OSX.3
							</td>
							<td>
								312.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 2.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								419.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 3.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								522.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								OmniWeb 5.5
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								420
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								iPod Touch / iPhone
							</td>
							<td>
								iPod
							</td>
							<td>
								420.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								S60
							</td>
							<td>
								S60
							</td>
							<td>
								413
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.0
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.0
							</td>
							<td>
								Win 95+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.2
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.5
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera for Wii
							</td>
							<td>
								Wii
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nokia N800
							</td>
							<td>
								N800
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nintendo DS browser
							</td>
							<td>
								Nintendo DS
							</td>
							<td>
								8.5
							</td>
							<td>
								C/A<sup>1</sup>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> -->
		<!-- END EXAMPLE TABLE PORTLET-->
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<!-- <div class="portlet box blue-madison">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>Responsive Table With Expandable details
				</div>
				<div class="tools">
					<a href="javascript:;" class="reload">
					</a>
					<a href="javascript:;" class="remove">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover" id="sample_3">
					<thead>
						<tr>
							<th>
								Rendering engine
							</th>
							<th>
								Browser
							</th>
							<th>
								Platform(s)
							</th>
							<th>
								Engine version
							</th>
							<th>
								CSS grade
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 4.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								4
							</td>
							<td>
								X
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5
							</td>
							<td>
								C
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.5
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 6
							</td>
							<td>
								Win 98+
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 7
							</td>
							<td>
								Win XP SP2+
							</td>
							<td>
								7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								AOL browser (AOL desktop)
							</td>
							<td>
								Win XP
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.5
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 2.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 3.0
							</td>
							<td>
								Win 2k+ / OSX.3+
							</td>
							<td>
								1.9
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.0
							</td>
							<td>
								OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.5
							</td>
							<td>
								OSX.3+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape 7.2
							</td>
							<td>
								Win 95+ / Mac OS 8.6-9.2
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Browser 8
							</td>
							<td>
								Win 98SE+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Navigator 9
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.1
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.2
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.2
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.3
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.4
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.4
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.5
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.6
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.7
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.8
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Seamonkey 1.1
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Epiphany 2.20
							</td>
							<td>
								Gnome
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.2
							</td>
							<td>
								OSX.3
							</td>
							<td>
								125.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.3
							</td>
							<td>
								OSX.3
							</td>
							<td>
								312.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 2.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								419.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 3.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								522.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								OmniWeb 5.5
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								420
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								iPod Touch / iPhone
							</td>
							<td>
								iPod
							</td>
							<td>
								420.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								S60
							</td>
							<td>
								S60
							</td>
							<td>
								413
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.0
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.0
							</td>
							<td>
								Win 95+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.2
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.5
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera for Wii
							</td>
							<td>
								Wii
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nokia N800
							</td>
							<td>
								N800
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nintendo DS browser
							</td>
							<td>
								Nintendo DS
							</td>
							<td>
								8.5
							</td>
							<td>
								C/A<sup>1</sup>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> -->
		<!-- END EXAMPLE TABLE PORTLET-->
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<!-- <div class="portlet box red-intense">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>Show/Hide Columns
				</div>
				<div class="actions">
					<div class="btn-group">
						<a class="btn default" href="#" data-toggle="dropdown">
						Columns <i class="fa fa-angle-down"></i>
						</a>
						<div id="sample_4_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
							<label><input type="checkbox" checked data-column="0">Rendering engine</label>
							<label><input type="checkbox" checked data-column="1">Browser</label>
							<label><input type="checkbox" checked data-column="2">Platform(s)</label>
							<label><input type="checkbox" checked data-column="3">Engine version</label>
							<label><input type="checkbox" checked data-column="4">CSS grade</label>
						</div>
					</div>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover" id="sample_4">
					<thead>
						<tr>
							<th>
								Rendering engine
							</th>
							<th>
								Browser
							</th>
							<th class="hidden-xs">
								Platform(s)
							</th>
							<th class="hidden-xs">
								Engine version
							</th>
							<th class="hidden-xs">
								CSS grade
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 4.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								4
							</td>
							<td>
								X
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5
							</td>
							<td>
								C
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.5
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 6
							</td>
							<td>
								Win 98+
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 7
							</td>
							<td>
								Win XP SP2+
							</td>
							<td>
								7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								AOL browser (AOL desktop)
							</td>
							<td>
								Win XP
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.5
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 2.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 3.0
							</td>
							<td>
								Win 2k+ / OSX.3+
							</td>
							<td>
								1.9
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.0
							</td>
							<td>
								OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.5
							</td>
							<td>
								OSX.3+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape 7.2
							</td>
							<td>
								Win 95+ / Mac OS 8.6-9.2
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Browser 8
							</td>
							<td>
								Win 98SE+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Navigator 9
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.1
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.2
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.2
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.3
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.4
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.4
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.5
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.6
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.7
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.8
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Seamonkey 1.1
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Epiphany 2.20
							</td>
							<td>
								Gnome
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.2
							</td>
							<td>
								OSX.3
							</td>
							<td>
								125.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.3
							</td>
							<td>
								OSX.3
							</td>
							<td>
								312.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 2.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								419.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 3.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								522.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								OmniWeb 5.5
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								420
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								iPod Touch / iPhone
							</td>
							<td>
								iPod
							</td>
							<td>
								420.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								S60
							</td>
							<td>
								S60
							</td>
							<td>
								413
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.0
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.0
							</td>
							<td>
								Win 95+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.2
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.5
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera for Wii
							</td>
							<td>
								Wii
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nokia N800
							</td>
							<td>
								N800
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nintendo DS browser
							</td>
							<td>
								Nintendo DS
							</td>
							<td>
								8.5
							</td>
							<td>
								C/A<sup>1</sup>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> -->
		<!-- END EXAMPLE TABLE PORTLET-->
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<!-- <div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>Scroller
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse">
					</a>
					<a href="#portlet-config" data-toggle="modal" class="config">
					</a>
					<a href="javascript:;" class="reload">
					</a>
					<a href="javascript:;" class="remove">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-hover" id="sample_5">
					<thead>
						<tr>
							<th>
								Rendering engine
							</th>
							<th>
								Browser
							</th>
							<th class="hidden-xs">
								Platform(s)
							</th>
							<th class="hidden-xs">
								Engine version
							</th>
							<th class="hidden-xs">
								CSS grade
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 4.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								4
							</td>
							<td>
								X
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5
							</td>
							<td>
								C
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.5
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 6
							</td>
							<td>
								Win 98+
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 7
							</td>
							<td>
								Win XP SP2+
							</td>
							<td>
								7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								AOL browser (AOL desktop)
							</td>
							<td>
								Win XP
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.5
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 2.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 3.0
							</td>
							<td>
								Win 2k+ / OSX.3+
							</td>
							<td>
								1.9
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.0
							</td>
							<td>
								OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.5
							</td>
							<td>
								OSX.3+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape 7.2
							</td>
							<td>
								Win 95+ / Mac OS 8.6-9.2
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Browser 8
							</td>
							<td>
								Win 98SE+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Navigator 9
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.1
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.2
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.2
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.3
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.4
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.4
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.5
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.6
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.7
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.8
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Seamonkey 1.1
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Epiphany 2.20
							</td>
							<td>
								Gnome
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.2
							</td>
							<td>
								OSX.3
							</td>
							<td>
								125.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.3
							</td>
							<td>
								OSX.3
							</td>
							<td>
								312.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 2.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								419.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 3.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								522.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								OmniWeb 5.5
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								420
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								iPod Touch / iPhone
							</td>
							<td>
								iPod
							</td>
							<td>
								420.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								S60
							</td>
							<td>
								S60
							</td>
							<td>
								413
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.0
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.0
							</td>
							<td>
								Win 95+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.2
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.5
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera for Wii
							</td>
							<td>
								Wii
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nokia N800
							</td>
							<td>
								N800
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nintendo DS browser
							</td>
							<td>
								Nintendo DS
							</td>
							<td>
								8.5
							</td>
							<td>
								C/A<sup>1</sup>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> -->
		<!-- END EXAMPLE TABLE PORTLET-->
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<!-- <div class="portlet box red-intense">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>Columns Reorder
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse">
					</a>
					<a href="#portlet-config" data-toggle="modal" class="config">
					</a>
					<a href="javascript:;" class="reload">
					</a>
					<a href="javascript:;" class="remove">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover" id="sample_6">
					<thead>
						<tr>
							<th>
								Rendering engine
							</th>
							<th>
								Browser
							</th>
							<th class="hidden-xs">
								Platform(s)
							</th>
							<th class="hidden-xs">
								Engine version
							</th>
							<th class="hidden-xs">
								CSS grade
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 4.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								4
							</td>
							<td>
								X
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.0
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5
							</td>
							<td>
								C
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.5
							</td>
							<td>
								Win 95+
							</td>
							<td>
								5.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 6
							</td>
							<td>
								Win 98+
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 7
							</td>
							<td>
								Win XP SP2+
							</td>
							<td>
								7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Trident
							</td>
							<td>
								AOL browser (AOL desktop)
							</td>
							<td>
								Win XP
							</td>
							<td>
								6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.5
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 2.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Firefox 3.0
							</td>
							<td>
								Win 2k+ / OSX.3+
							</td>
							<td>
								1.9
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.0
							</td>
							<td>
								OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Camino 1.5
							</td>
							<td>
								OSX.3+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape 7.2
							</td>
							<td>
								Win 95+ / Mac OS 8.6-9.2
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Browser 8
							</td>
							<td>
								Win 98SE+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Netscape Navigator 9
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.1
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.2
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.2
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.3
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.4
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.4
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.5
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.6
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								1.6
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.7
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.7
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.8
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Seamonkey 1.1
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Gecko
							</td>
							<td>
								Epiphany 2.20
							</td>
							<td>
								Gnome
							</td>
							<td>
								1.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.2
							</td>
							<td>
								OSX.3
							</td>
							<td>
								125.5
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 1.3
							</td>
							<td>
								OSX.3
							</td>
							<td>
								312.8
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 2.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								419.3
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								Safari 3.0
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								522.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								OmniWeb 5.5
							</td>
							<td>
								OSX.4+
							</td>
							<td>
								420
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								iPod Touch / iPhone
							</td>
							<td>
								iPod
							</td>
							<td>
								420.1
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Webkit
							</td>
							<td>
								S60
							</td>
							<td>
								S60
							</td>
							<td>
								413
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 7.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.0
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 8.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.0
							</td>
							<td>
								Win 95+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.2
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera 9.5
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Opera for Wii
							</td>
							<td>
								Wii
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nokia N800
							</td>
							<td>
								N800
							</td>
							<td>
								-
							</td>
							<td>
								A
							</td>
						</tr>
						<tr>
							<td>
								Presto
							</td>
							<td>
								Nintendo DS browser
							</td>
							<td>
								Nintendo DS
							</td>
							<td>
								8.5
							</td>
							<td>
								C/A<sup>1</sup>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> -->
		<!-- END EXAMPLE TABLE PORTLET-->

	</div>
	<?php include "a.php"; ?>
</div>

<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS -->
<script>
	TableAdvanced.init();
</script>
<!-- END MAIN JS