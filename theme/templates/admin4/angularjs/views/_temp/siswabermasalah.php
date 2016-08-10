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