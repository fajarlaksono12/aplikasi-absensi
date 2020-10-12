<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") {
  $pass = sha1($_POST['password']);
  $user =$_POST['username'];
  $login = $koneksi->query("SELECT * FROM tb_user WHERE username ='$user' and password = '$pass'");
  $data = $login->fetch_array();
  $count_rows = $login->num_rows;
  if ($count_rows ==1) {
    $_SESSION['id_user'] =    $data['id_user'];
    $_SESSION['nameuser'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    echo"<script>alert('login berhasil! $_SESSION[nameuser]') ;</script>";
    echo"<script>document.location.href='?page=home';</script>";
  }else {
    $_SESSION['id_user']='';
    echo "<script> alert('login gagal');</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="./plugins/images/favicon.png">
  <title>Absenku</title>
  <!-- Bootstrap Core CSS -->
  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- animation CSS -->
  <link href="css/animate.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">
  <!-- color CSS -->
  <link href="css/colors/default.css" id="theme" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <section id="wrapper" class="new-login-register">
    <div class="lg-info-panel">
      <div class="inner-panel">
        <a href="javascript:void(0)" class="p-20 di"><img src="./plugins/images/admin-logo.png"></a>
        <div class="lg-content">
          <h2>APLIKASI ABSENSI</h2>
          <p class="text-muted"> METRO NTT FASHION FASHION </p>
          
        </div>
      </div>
    </div>
    <div class="new-login-box">
      <div class="white-box">
        <h3 class="box-title m-b-0">Sign In to Admin</h3>
        <small>Enter your details below</small>
        <form class="form-horizontal new-lg-form" id="loginform" action="index.html">

          <div class="form-group ">
            <div class="col-xs-12">
              <h3>Absensi Pegawai</h3>
              <p class="text-muted">Masukan user id pegawai </p>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" placeholder="Nomor Induk Pegawai">
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                type="submit">Absen</button>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i>
                Login Admin?</a>
          </div>
        <!-- form untuk login -->
        </form>
        <form class="form-horizontal" id="recoverform" action="" method ="post">
          <div class="form-group  m-t-20">
            <div class="col-xs-12">
              <label>Username</label>
              <input class="form-control" type="nameuser" required="" placeholder="Username" name="username">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <label>Password</label>
              <input class="form-control" type="password" required="" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="checkbox checkbox-info pull-left p-t-0">
                <input id="checkbox-signup" type="checkbox">
                <label for="checkbox-signup"> Remember me </label>
              </div>
              
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light"
                type="submit">Log In</button>
            </div>
          </div>
          </div>
        </form>
      </div>
    </div>


  </section>
  <!-- jQuery -->
  <script src="./plugins/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Menu Plugin JavaScript -->
  <script src="./plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

  <!--slimscroll JavaScript -->
  <script src="js/jquery.slimscroll.js"></script>
  <!--Wave Effects -->
  <script src="js/waves.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.min.js"></script>
  <!--Style Switcher -->
  <script src="./plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>