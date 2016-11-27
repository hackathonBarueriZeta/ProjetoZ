<?php include_once '../home/masterPage.php';
if ($_SESSION['dadosusuario']['perfilUsuario'] == 3 && $_GET['action'] == 1){
	include_once '../dashboard/vistoriador.php';
}?>
