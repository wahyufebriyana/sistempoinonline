<?php
$query = mysql_query("SELECT * FROM listremisi");
$q = mysql_query("SELECT * FROM data where status='siswa' and poin!=0 order by tahun desc");
$tmpl = mysql_query("SELECT tahun from aplikasi");
$row = mysql_fetch_array($tmpl);
$tahun = $row['tahun'];

?>
<div class="col-md-5 col-sm-12 col-xs-12">
    <!-- BEGIN REGIONAL STATS PORTLET-->
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-share font-green-haze"></i>
                <span class="caption-subject font-green-haze bold uppercase">Remisi Langsung</span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#">
                </a>
            </div>
        </div>
        <div class="form-body">
            <form action="remisi.php" method="POST">
                <div class="portlet light" style="height: auto;" data-always-visible="1" data-rail-visible="0">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label>Tanggal</label></div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input name="tanggal" class="form-control">
                                    </div>
                                    <div class="col-md-5">
                                        <select name="bulan" class="form-control select2me">
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
                                    <div class="col-md-4">
                                        <input name="tahun" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label>Nama</label></div>
                            <div class="col-md-9"  class="input-group"><div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
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
                            </div></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label>Remisi</label></div>
                            <div class="col-md-9">
                                <select name="koderemisi" id="koderemisi" class="bs-select form-control">
                                    <option value="">Select Remisi</option>
                                        <?php while ( $results = mysql_fetch_array($query)) { ?>
                                    <option id="<?php echo $results['kode']; ?>" value="<?php echo $results['kode']; ?>"><?php echo $results['urai']; ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="jumlah"></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button> 
                                <button type="reset" class="btn btn-danger"><i class="fa fa-close"> Batal</i></button>
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