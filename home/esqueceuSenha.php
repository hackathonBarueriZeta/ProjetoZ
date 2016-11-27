<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Recuperar senha - SIMGETEC</title>
		<?php
		include '../include/head.php';
		$jquery = FALSE;
		?>

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
				<a href="index.php"><img src="../dist/img/logo-simgetec.png" width="50%"> </a>
			</div><!-- /.login-logo -->
			<div class="login-box-body">
				<p class="login-box-msg">
					Recuperar acesso
				</p>

				<?php
				if ($_POST) {
					include_once '../function/autoloader.php';
					include_once '../function/enviaEmail.php';

					$anexo = "";
					$rodapeEmail = "Não responda esse email, essa mensagem foi enviada  automaticamente pelo sistema SIMGETEC.<br>
								O sistema foi desenvolvido pelos  alunos do Ctrl Zeta";
					$tituloEmail = "<img src=\"http://simgetec.ctrlzeta.com.br/dist/img/logo-simgetec.png\" width=\"360\" height=\"170\"/>";
					$corpoEmail = "Olá {$_POST['txt_email_esqueceu']} você solicitou a recuperação de senha para o sistema SIMGETEC.<br>
								Caso tenha realizado essa operação, entre em contato com dev@ctrlzeta.com.br<br>
												<h2>Solicitação para redefinir senha</h2>
												Usuário: {$_POST['txt_email_esqueceu']}<br>												
												Data da liberação: " . date('d/m/Y') . "<br>";
					$corpo = setCorpoEmail($tituloEmail, $corpoEmail, $rodapeEmail);
					$assunto = "Recuperar senha SIMGETEC";
					envaiEmail($_POST['txt_email_esqueceu'], $_POST['txt_email_esqueceu'], $assunto, $corpo, $anexo);
					echo "Solicitação enviada com sucesso, verifique sua caixa de email.";
				} else {?>

				

				<form action="?" name="frm_login" method="post">
					<div class="form-group has-feedback">
						<label for="txt_email_esqueceu">E-mail:</label>
						<input type="email" class="form-control" placeholder="E-mail" name="txt_email_esqueceu" value="adm@cz.com">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<a  class="btn btn-success btn-block btn-flat" href="../novo-orientador.php" class="text-center">Novo Orientador</a>

						</div><!-- /.col -->
						<div class="col-xs-6">
							<button type="submit" class="btn btn-primary btn-block btn-flat">
								Enviar senha
							</button>
						</div><!-- /.col -->
					</div>
				</form><?php }
				?>
			</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->
		<?php
		include_once '../include/scriptPadrao.php';
		?>
	</body>
</html>
