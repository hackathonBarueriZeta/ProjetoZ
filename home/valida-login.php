<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SIMGETEC</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
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
				<a href="index.php"><img src="../dist/img/logo-simgetec.png"></a>
			</div><!-- /.login-logo -->
			<div class="login-box-body">
				<h2>Validando Dados</h2>
				<p class="login-box-msg">
				<?php
				
				if ($_SERVER['REQUEST_METHOD']=='POST') {						
					$cont = 0;
					$erro_msg = " ";
					foreach ($_POST as $campo => $value) {
						if ($value != "") {
							$cont++;
						} else {
							switch ($campo) {
								case 'txt_email_login' :
									$erro_msg .= "O campo email não foi definido.<br>";
									break;
								case 'txt_senha_login' :
									$erro_msg .= "O campo senha não foi definido.<br>";
									break;
							}
						}
					}
					if (isset($_SESSION["zAcessoPrimeiro"][0])  == md5("ctrlZeta")) {
						include_once '../function/autoloader.php';
						
						$usuario = new Usuario;
						$usuario->conexao =	new ManipulaBanco;
						$usuario->atualizaSenha($_SESSION["zAcessoPrimeiro"][1],md5(sha1($_POST['txt_nova_senha'])));						
						$cont = 2;		
					}
					
					if ($cont == 2) {
						include_once '../function/autoloader.php';
						$usuario = new Ambiente;
						$usuario -> conexao = new ManipulaBanco;
						if (isset($_SESSION["zAcessoPrimeiro"][0])  == md5("ctrlZeta")) {
							$usuario -> email 	= $_SESSION["zAcessoPrimeiro"][1];
							$usuario -> senha 	= md5(sha1($_POST['txt_nova_senha']));	
							session_unset($_SESSION["zAcessoPrimeiro"]);
						}else{
							$usuario -> email 	= $_POST['txt_email_login'];
							$usuario -> senha 	= md5(sha1($_POST['txt_senha_login']));	
						}				
						$acessoRetorno 	= $usuario -> autenticaUsuario();
						switch ($acessoRetorno) {
							case '0' ://bloquado
							echo "Usuário bloqueado, consulte o coordenador.";
							break;
						case '1' ://aguardando liberação
							echo "Usuário não liberado, consulte o coordenador.";
							break;
						case '2'://primeiro acesso						
							include_once '../primeiroAcesso.php';
							break;
						case '3'://liberado
							header("Location: ../home/?action=1");
							break;
						default :
							echo "Algo está errado com o seu usuário, consulte o administrador do sistema";
							break;
					}
						
					} else {
						echo "<h2>Erro</h2><p class='login-box-msg'>" . $erro_msg . "</p>";
					}
				} else {
					echo "Algo parece errado, você chegou aqui mas não da maneira correta.<br>";
				}
				?>
				</p>

			</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->

		<!-- jQuery 2.1.4 -->
		<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="../bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>
