<?php
/**
 *
 */
class Avaliador extends ManipulaBanco {
	public $conexao;
	function getAvaliadorById($email){
		$setUsuario = $this -> conexao -> selecionarRegistro("tbAvaliador", "idAvaliador", "WHERE fkIdUsuarioAvaliador = '{$email}'", "ORDER BY IdAvaliador", "LIMIT 1");
		foreach ($setUsuario as $liste) {
			return $liste->idAvaliador;
		}
	}
	function setAvaliadorProjeto($avaliador,$projeto){
		$data = array('fkIdAvaliadorProjeto' => $avaliador, 'fkIdPesquisaAvaliadorProjeto' => $projeto);
		return $this -> conexao -> inserirRegistro("tbAvaliadorProjeto", $data);
	}
	function setNotaProjeto($data){
		return $this -> conexao -> inserirRegistro("tbNota", $data);
	}
	
}
?>
