<?php
  session_start();
  $username = "";
  $password = "";
  if(isset($_POST['username']) && isset($_POST['password'])){
    $un = $_POST['username'];
    $pw = $_POST['password'];
    $cn = @mysql_connect("localhost", "root", "") or die("Gagal konek msql.");
    mysql_select_db("sistempoin") or die("Gagal Database");
    $query = "select * from data where username = '$un' && password = '$pw'";
    $hasil = mysql_query($query) or die("Gagal Query.");
    $r = mysql_fetch_array($hasil);
    if($hasil != false){
      if(mysql_num_rows($hasil) == 1){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['nama'] = $r['nama'];
        $_SESSION['nis'] = $r['nis'];
        $_SESSION['tahun'] = $r['tahun'];
        $_SESSION['kelas'] = $r['kelas'];
        $_SESSION['poin'] = $r['poin'];
        $_SESSION['keterangan'] = $r['keterangan'];
        $_SESSION['status'] = $r['status'];
        if ($r['status'] = "guru") {
          echo '<meta http-equiv="refresh" content="0; admin/index.php">';
        }else if ($r['status'] = "siswa") {
          echo '<meta http-equiv="refresh" content="0; siswa/index.php">';
        }
        
      }
    }
  }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>login</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/arial.js"></script>
    <script type="text/javascript" src="js/cuf_run.js"></script>
    <script type="text/javascript" src="js/radius.js"></script>
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div id="wrapper">
      
      <div id="boxy-login-wrapper">
        <?php
          if(empty($username)){
            if(isset($_POST['username'])|| isset($_POST['password'])){
              echo '<font color=red><b>"Username dan Password yang anda masukan Salah!"</b></font>';
            }
        ?>

            <form id="boxy-login-form" name="boxy-login-form" method="post" action="index.php"> 
              <font color="#fff"><big>
                <center>
                  <br>
                  <img src="img/STM.png" width="110" height="110" align="middle">
                  <h4>SISTEM INFORMASI POIN PELANGGARAN</h4>
                  <h3>SMK NEGERI 2 WONOSARI</h3><br>
                </center>
              </big></font>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="username" name="username" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                    
                  <button type="submit" class="btn btn-success">Submit</button>
               </form>
              <?php
              }
              else{
              ?>
              <b>Tunggu Sesaat ... </b>
              <?php
              }
              ?>

            <!-- <span class="boxy-refresh glyphicon glyphicon-refresh"></span>
            <em class="small-forgot">
                      <a href="#" class="boxy-forgot">forgot?</a>
            </em> -->

        </div>
   </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.2.0/bootbox.min.js'></script>
    <script src='http://s3-us-west-2.amazonaws.com/s.cdpn.io/1251/bootstrap.glyphs.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
