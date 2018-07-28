<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CFcollege 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="https://fonts.googleapis.com/css?family=Assistant:200" rel="stylesheet">
  <style>
    button, #bg-btn, .btn, .btn-block, .btn-flat{
        background-color: #547DE8!important;
    }
    .foot{
      text-align: center;
      color: #B0B0B0;
      font-size: 12px;
    }
    .text-bla{
      color: #DBDBDB!important;
      font-size: 12px;
    }
  </style>
</head>
<body style="background: radial-gradient(rgb(93, 143, 250), rgb(76, 108, 214), rgb(41, 85, 179));" class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a style="color: white" href="#"><b>CF</b>college</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingreso al sistema </p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recuerdame
            </label>
          </div>
        </div>
        <!-- /.col -->
        <br>
        <br>
        <div class="col-xs-12">
          <button id="bg-btn" type="submit" class="btn btn-block btn-flat"><a style="color: white" >Ingresar</a></button>
        </div>
        <br>
        <br><br><br>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->

    <a href="#">He olvidado mi contraseña </a><br>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<footer>
  <div class="foot">
    Copyright &copy; 2018 <b><a target="_blank" href="https://cf-softwaresolutions.cf" class="text-bla">CF Software Solutions</a></b><br>
    Todos los derechos reservados.
  </div>
</footer>
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
