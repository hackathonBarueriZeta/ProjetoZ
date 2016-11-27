<?php
/**
 *
 */
class Orientador extends ManipulaBanco {
	public $arquivo, $conexao, $email, $perfil, $senha, $nome, $status, $idCurso, $telefone;
	/* Metodos */
	function getListaLiberacao() {
		$conexao = new ManipulaBanco;
		return $conexao -> selecionarRegistro("tbUsuario", "nomeUsuario,emailUsuario", "WHERE fkIdPerfilUsuario = 3 AND statusUsuario = 1");
	}
	function liberaOrientador($senhaProvisoria) {
		//$conexao = new ManipulaBanco;
		$data = array('statusUsuario' => $this -> status, 'senhaUsuario' => $senhaProvisoria);
		return $this -> conexao -> atualizarRegistro("tbUsuario", $data, "emailUsuario='{$this->email}'");
	}
	function getOrientadorById($nomeOrientador) {
		$orientador = $this -> conexao -> selecionarRegistro("tbOrientador,tbUsuario", "idOrientador", "WHERE nomeUsuario = '{$nomeOrientador}' AND emailUsuario = fkIdUsuarioOrientador", "ORDER BY idOrientador", "LIMIT 1");
		foreach ($orientador as $liste) {
			return $liste -> idOrientador;
		}
	}
}
?>
