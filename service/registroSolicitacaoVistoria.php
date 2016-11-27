<?php
$conexao = new ManipulaBanco;
$dados = json_decode($_POST['solitacao']);
foreach ($dados as $key => $value) {
	$data = array($key=>$value);
	$conexao->inserirRegistro("tbVistoriador",$data);
}
$dados = json_decode($_POST['skill']);
foreach ($dados as $key => $value) {
	$data = array($key=>$value);
	$conexao->inserirRegistro("tbSolicitada",$data);
}
$dados = json_decode($_POST['objeto']);
foreach ($dados as $key => $value) {
	$data = array($key=>$value);
	$conexao->inserirRegistro("tbObjetoSolicitado",$data);
}
?>