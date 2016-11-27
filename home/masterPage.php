<?php
include_once '../include/verificaSessao.php';
include_once '../function/autoloader.php';
$criaPagina = new Ambiente;
$criaPagina -> conexao = new ManipulaBanco;
if (isset($_GET['action'])) {
	if (is_numeric($_GET['action'])) {
		$criaPagina -> arquivo = $_GET['action'];
		$arquivo = "../" . $criaPagina -> getArquivo();
		$tituloPagina = $criaPagina -> getTituloPagina();
		$descricaoPagina = $criaPagina -> getDescricao();
		$caminho = explode("/", $criaPagina -> getBreadCrumb());
	} else {
		$criaPagina -> erroCriaPagina();
	}
} else {
	$criaPagina -> erroCriaPagina();
}
$jquery = false;
?>
<!DOCTYPE html>
<html>
	<head>

		<?php
		include_once '../include/head.php';
		?>
		<title><?php echo $tituloPagina; ?> - ZSec</title>
		
	</head>
	<?php
	include_once '../include/body.php';
	?>
	<!-- Aplicação -->
	<div class="wrapper">
		<header class="main-header">
			<?php
			include_once '../include/logo.php';
			?>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Botão para acionar o menu lateral-->
				<?php
				include_once '../include/toggle.php';
				?>
				<div class="navbar-custom-menu">
					<?php
					include_once '../include/notificacoes.php';
					?>
				</div>
			</nav>
		</header>
		<!-- =============================================== -->
		<!-- Coluna lateral com menu -->
		<aside class="main-sidebar">
			<!-- coluna lateral -->
			<section class="sidebar">
				<?php
				include_once '../include/painelLateral.php';
				?>
			</section>
			<!-- /.coluna lateral -->
		</aside>
		<!-- =============================================== -->
		<!-- Conteudo da pagina -->
		<div class="content-wrapper bigform-content">
			<!-- Titulo do Conteudo -->
			<section class="content-header">
				<?php
				include_once '../include/tituloConteudo.php';
				include_once '../include/breadCrumb.php';
				?>
			</section>
			<!-- Main content -->
			<?php

			if (file_exists($arquivo)) {
				include "$arquivo";
			} else {
				//include "../erro/?action=0";
			}
			?>
			<!-- /.Titulo do Conteudo -->
		</div>
		<!-- /.Conteudo da pagina  -->
		<?php
		include_once '../include/footer.php';
		?>
		<!-- Painelde Controle lateral -->
		<?php
		//include_once '../include/tabPainelControle.php';
		?>
		<!-- /.Painelde Controle lateral -->
	</div>
	<!-- ./Aplicação -->
	<!-- Script padrao -->
	<?php
	include_once '../include/scriptPadrao.php';
	?>
	</body>
</html>
