<?php
include_once '../function/autoloader.php';
$buscaNoBanco = new ManipulaBanco;
if ($_GET['TB'] == "orientadorNome") {
	$query = $_REQUEST['query'];
	$Imprime = $buscaNoBanco -> selecionarRegistro("tbUsuario", "nomeUsuario", "WHERE nomeUsuario LIKE '%{$query}%'");
	$array = array();
	foreach ($Imprime as $listar) {
		$array[] = $listar -> nomeUsuario;
	}
	echo json_encode($array);
}
if ($_GET['TB'] == "orientadorEmail") {
	$query = $_REQUEST['query'];
	$Imprime = $buscaNoBanco -> selecionarRegistro("tbUsuario", "emailUsuario", "WHERE emailUsuario LIKE '%{$query}%'");
	$array = array();
	foreach ($Imprime as $listar) {
		$array[] = $listar -> emailUsuario;
	}
	echo json_encode($array);
}
if ($_GET['TB'] == "avaliadorNome") {
	$query = $_REQUEST['query'];
	$Imprime = $buscaNoBanco -> selecionarRegistro("tbUsuario", "nomeUsuario", "WHERE nomeUsuario LIKE '%{$query}%'");
	$array = array();
	foreach ($Imprime as $listar) {
		$array[] = $listar -> nomeUsuario;
	}
	echo json_encode($array);
}
if ($_GET['TB'] == "avaliadorEmail") {
	$query = $_REQUEST['query'];
	$Imprime = $buscaNoBanco -> selecionarRegistro("tbUsuario", "emailUsuario", "WHERE emailUsuario LIKE '%{$query}%'");
	$array = array();
	foreach ($Imprime as $listar) {
		$array[] = $listar -> emailUsuario;
	}
	echo json_encode($array);
}
if ($_GET['TB'] == "curso") {
	$query = $_REQUEST['query'];
	$Imprime = $buscaNoBanco -> selecionarRegistro("tbCurso", "nomeCurso", "WHERE nomeCurso LIKE '%{$query}%'");
	$array = array();
	foreach ($Imprime as $listar) {
		$array[] = $listar -> nomeCurso;
	}
	echo json_encode($array);
}
if ($_GET['TB'] == "tipoPesquisa") {
	$query = $_REQUEST['query'];
	$Imprime = $buscaNoBanco -> selecionarRegistro("tbTipoPesquisa", "nomeTipoPesquisa", "WHERE nomeTipoPesquisa LIKE '%{$query}%'");
	$array = array();
	foreach ($Imprime as $listar) {
		$array[] = $listar -> nomeTipoPesquisa;
	}
	echo json_encode($array);
}
if ($_GET['TB'] == "linhaPesquisa") {
	$query = $_REQUEST['query'];
	$Imprime = $buscaNoBanco -> selecionarRegistro("tbLinhaPesquisa", "nomeLinhaPesquisa", "join tbCurso on fkIdCursoLinhaPesquisa = idCurso where nomeCurso like '%{$query}%'");
	$array = array();
	foreach ($Imprime as $listar) {
		$array[] = $listar -> nomeLinhaPesquisa;
	}
	echo json_encode($array);
}
?>