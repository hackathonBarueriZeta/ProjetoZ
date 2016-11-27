<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ZSec</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="plugins/iCheck/square/blue.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="index.php"><img src="dist/img/logo-simgetec.png" width="100%"> </a>
			</div><!-- /.login-logo -->
			<div class="login-box-body">
				<?php
					if($_GET['lang']=="pt-br"){
						$titulo = "Iniciar Sessão";
						$email = "Email";
						$senha = "Senha";
						$btnVistoriador = "Novo vistoriador";
						$btnLogin = "Login";
						$equeciSenha = "Esqueci a senha";
					}else if ($_GET['lang']=="es"){
						$titulo = "Iniciar la sesión";
						$email = "Correo electrónico";
						$senha = "Contraseña";
						$btnVistoriador = "Nuevo Topógrafo";
						$btnLogin = "Login";
						$equeciSenha = "Olvidé la contraseña";
					}else if ($_GET['lang']=="en"){
						$titulo = "Begin session";
						$email = "Email";
						$senha = "Password";
						$btnVistoriador = "New inspector";
						$btnLogin = "Login";
						$equeciSenha = "I forgot the password";
					}
					?>
				<p class="login-box-msg">
					<?php echo $titulo;?>
					
				</p>
				<form action="home/valida-login.php" name="frm_login" method="post">
					<div class="form-group has-feedback">
						<label for="txt_email_login"><?php echo $email;?></label>
						<input type="email" class="form-control" placeholder="Email" name="txt_email_login" value="seguradora@cz.com">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="txt_senha_login"><?php echo $senha;?></label>
						<input type="password" class="form-control" placeholder="Senha" name="txt_senha_login" value="123456">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<a  class="btn btn-success btn-block btn-flat" href="novo-vistoriador.php" class="text-center"><?php echo $btnVistoriador;?></a>
							
						</div><!-- /.col -->
						<div class="col-xs-6">
							<button type="submit" class="btn btn-primary btn-block btn-flat">
								<?php echo $btnLogin;?>
							</button>
							<a href="home/esqueceuSenha.php"><?php echo $equeciSenha;?></a>
						</div><!-- /.col -->
					</div>
				</form>
			</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->

		<!-- jQuery 2.1.4 -->
		<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- iCheck -->
		<script src="plugins/iCheck/icheck.min.js"></script>
		<script>
			$(function() {
				$('input').iCheck({
					checkboxClass : 'icheckbox_square-blue',
					radioClass : 'iradio_square-blue',
					increaseArea : '20%' // optional
				});
			});
		</script>
	</body>
</html>
