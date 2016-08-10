<div class="modal fade" id="pelanggaran" data-backdrop="static" data-keyboard="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <form class="modal-content noborder-radius" id="mw_form" action="javascript:void(0);">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Daftar Siswa Bermasalah</h4>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dataTables dataTable-grid dataTable-example" id="sample_1">
                <thead>
                    
                        <th></th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Poin</th>
                        <th>Keterangan</th>
                    
                </thead>
                <tbody>
                    
                        <?php
                            $tampil = "SELECT * FROM data WHERE poin!=0 and status='siswa' order by tahun desc";
                            $tmpl = "SELECT tahun from aplikasi";
                            $mysql = mysql_query($tmpl);
                            $row = mysql_fetch_array($mysql);
                            $sql = mysql_query($tampil);
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
                                echo "<tr><td>".$i."</td>
                                     <td>".$data['nama']."</td>
                                     <td>".$kelas." ".$data['kelas']."</td>
                                     <td align=center>" .$data['poin']."</td>
                                     <td>".$ket."</td></tr>";

                            }
                        ?>
                    
                </tbody>
                </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="pilih">Pilih</button>
          </div>
        </div>
    </form>
  </div>
</div>

<div class="modal fade" id="SK_I" data-backdrop="static" data-keyboard="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <form class="modal-content noborder-radius" id="mw_form" action="javascript:void(0);">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Daftar Siswa Dengan SP-I</h4>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dataTables dataTable-grid dataTable-example" id="sp1" >
                <thead>
                    
                        <th></th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Poin</th>
                    
                </thead>
                <tbody>
                        <?php
                            $tampil = "SELECT * FROM data WHERE poin>=25 and poin<50 order by tahun desc";
                            $tmpl = "SELECT tahun from aplikasi";
                            $mysql = mysql_query($tmpl);
                            $row = mysql_fetch_array($mysql);
                            $sql = mysql_query($tampil);
                            $tahun = $row['tahun'];

                            $i = 0;
                            while($data = mysql_fetch_array($sql)){
                                
                                $i++;
                                echo "<tr><td>".$i."</td>
                                     <td>".$data['nama']."</td>
                                     <td>".$kelas." ".$data['kelas']."</td>
                                     <td align=center>" .$data['poin']."</td>
                                     <td>".$ket."</td></tr>";

                            }
                        ?>
                </tbody>
                </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="pilih">Pilih</button>
          </div>
        </div>
    </form>
  </div>
</div>

<div class="modal fade" id="SK_II" data-backdrop="static" data-keyboard="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <form class="modal-content noborder-radius" id="mw_form" action="javascript:void(0);">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Daftar Siswa Dengan SP-II</h4>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dataTables dataTable-grid dataTable-example" id="sp2" >
                <thead>
                    
                        <th></th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Poin</th>
                    
                </thead>
                <tbody>
                        <?php
                            $tampil = "SELECT * FROM data WHERE poin>=50 and poin<80 order by tahun desc";
                            $tmpl = "SELECT tahun from aplikasi";
                            $mysql = mysql_query($tmpl);
                            $row = mysql_fetch_array($mysql);
                            $sql = mysql_query($tampil);
                            $tahun = $row['tahun'];

                            $i = 0;
                            while($data = mysql_fetch_array($sql)){
                                
                                
                                $i++;
                                echo "<tr><td>".$i."</td>
                                     <td>".$data['nama']."</td>
                                     <td>".$kelas." ".$data['kelas']."</td>
                                     <td align=center>" .$data['poin']."</td>
                                     <td>".$ket."</td></tr>";

                            }
                        ?>
                </tbody>
                </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="pilih">Pilih</button>
          </div>
        </div>
    </form>
  </div>
</div>

<div class="modal fade" id="SK_III" data-backdrop="static" data-keyboard="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <form class="modal-content noborder-radius" id="mw_form" action="javascript:void(0);">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Daftar Siswa Dengan SP-III</h4>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
                <table id="sp3" class="table table-bordered table-hover dataTables dataTable-grid dataTable-example" >
                <thead>
                    
                        <th></th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Poin</th>
                    
                </thead>
                <tbody>
                        <?php
                            $tampil = "SELECT * FROM data WHERE poin>=80 order by tahun desc";
                            $tmpl = "SELECT tahun from aplikasi";
                            $mysql = mysql_query($tmpl);
                            $row = mysql_fetch_array($mysql);
                            $sql = mysql_query($tampil);
                            $tahun = $row['tahun'];

                            $i = 0;
                            while($data = mysql_fetch_array($sql)){
                                
                                $i++;
                                echo "<tr><td>".$i."</td>
                                     <td>".$data['nama']."</td>
                                     <td>".$kelas." ".$data['kelas']."</td>
                                     <td align=center>" .$data['poin']."</td>
                                     <td>".$ket."</td></tr>";

                            }
                        ?>
                </tbody>
                </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="pilih">Pilih</button>
          </div>
        </div>
    </form>
  </div>
</div>