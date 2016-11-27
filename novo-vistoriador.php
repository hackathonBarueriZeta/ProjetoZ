<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Novo Orientador - SIMGETEC</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/AdminLTE.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="plugins/iCheck/square/blue.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="hold-transition register-page">
		<div class="register-box">
			<div class="register-logo">
				<a href="index.php"><img src="dist/img/logo-simgetec.png" width="50%"></a>
			</div>

			<div class="register-box-body">
				<p class="login-box-msg">
					Registro de Avaliador
				</p>
				<form action="home/registra-novo-vistoriador.php" name="frm_novo_orientador" method="post">
					<div class="form-group has-feedback">
						<label for="txt_nome">Nome e sobrenome</label>
						<input type="text" class="form-control" placeholder="Nome e Sobrenome" name="txt_nome" required>
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
					</div>									
					<div class="row">
						<div class="col-md-6">
							<div class="form-group has-feedback">
								<label for="txt_telefone">Telefone</label>
								<span class="glyphicon glyphicon-phone form-control-feedback"></span>
								<input type="tel" class="form-control" placeholder="Telefone" name="txt_telefone">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group  has-feedback">
								<label for="txt_email">Email</label>
								<input type="email" class="form-control" placeholder="Email" name="txt_email" required>
								<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group has-feedback">
								<label>
									<input type="checkbox" checked> Eu aceito os <a href="#">termos de uso</a>
								</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-feedback">
								<button type="submit" class="btn btn-primary btn-block btn-flat">
									Registrar
								</button>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-feedback">
								<a href="index.php" class="btn btn-success btn-block btn-flat">Já sou registrado</a>
							</div>
						</div>
					</div>

				</form>

			</div><!-- /.form-box -->
		</div><!-- /.register-box -->

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
