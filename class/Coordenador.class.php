<?php
/**
 *
 */
class Coordenador extends ManipulaBanco {
	public $arquivo, $conexao, $email, $perfil, $senha, $nome, $status, $idCurso, $telefone;
	/* Metodos */
	function getCoordenador(){
		return $this->conexao->selecionarRegistro("tbCoordenador,tbUsuario","nomeUsuario,fkIdUsuarioCoordenador","WHERE emailUsuario = fkIdUsuarioCoordenador","","");
	}
	function getCursoById($nomeCurso) {
		$curso = $this -> conexao -> selecionarRegistro("tbCurso", "idCurso", "WHERE nomeCurso='{$nomeCurso}'", "ORDER BY nomeCurso", "LIMIT 1");
		foreach ($curso as $liste) {
			return $liste -> idCurso;
		}
	}	
	function getCoordenadorById($email){
		$setUsuario = $this -> conexao -> selecionarRegistro("tbCoordenador", "idCoordenador", "WHERE fkIdUsuarioCoordenador = '{$email}'", "ORDER BY idCoordenador", "LIMIT 1");
		foreach ($setUsuario as $liste) {
			return $liste->idCoordenador;
		}
	}
}
?>
