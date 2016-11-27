<?php
/**
 *
 */
class Usuario extends ManipulaBanco {
	public $arquivo, $conexao, $email, $perfil, $senha, $nome, $status, $idCurso, $telefone;
	/* Metodos */
	function novoUsuario() {
		$data = array('fkIdPerfilUsuario' => $this -> perfil, 'emailUsuario' => $this -> email, 'senhaUsuario' => $this -> senha, 'nomeUsuario' => $this -> nome, 'statusUsuario' => $this -> status);
		$conexao = new ManipulaBanco;
		return $conexao -> inserirRegistro("tbUsuario", $data);
	}
	function atualizaSenha($email,$senha) {
		$data = array('senhaUsuario' => $senha, 'statusUsuario' => 3);
		return $this->conexao->atualizarRegistro("tbUsuario", $data, "emailUsuario='{$email}'");	
	}
	function novoOrientador() {
		$data = array('fkIdUsuarioOrientador' => $this -> email, 'telefoneOrientador' => $this -> telefone);
		$conexao = new ManipulaBanco;
		return $conexao -> inserirRegistro("tbOrientador", $data);
	}
	function novoCoordenador(){
		$data = array('fkIdUsuarioCordenador' => $this -> email, 'fkIdCursoCoordenador' => $this -> curso, 'telefoneCoordenador' => $this -> telefone,'nomeCoordenador'=> $this->nome);
		$conexao = new ManipulaBanco;
		return $conexao -> inserirRegistro("tbCoordenador", $data);
	}
	function novoAvaliador(){
		$data = array('fkIdUsuarioAvaliador' => $this -> email);
		$conexao = new ManipulaBanco;
		return $conexao -> inserirRegistro("tbAvaliador", $data);
	}
	function liberaOrientador(){
		$data = array('fkIdUsuarioAvaliador' => $this -> email, 'telefoneAvaliador' => $this -> telefone,'nomeAvaliador'=> $this->nome);
		$conexao = new ManipulaBanco;
		return $conexao -> inserirRegistro("tbAvaliador", $data);
	}
	function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false) {
		// Caracteres de cada tipo
		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$%*-';
		// Variáveis internas
		$retorno = '';
		$caracteres = '';
		// Agrupamos todos os caracteres que poderão ser utilizados
		$caracteres .= $lmin;
		if ($maiusculas)
			$caracteres .= $lmai;
		if ($numeros)
			$caracteres .= $num;
		if ($simbolos)
			$caracteres .= $simb;
		// Calculamos o total de caracteres possíveis
		$len = strlen($caracteres);
		for ($n = 1; $n <= $tamanho; $n++) {
			// Criamos um número aleatório de 1 até $len para pegar um dos caracteres
			$rand = mt_rand(1, $len);
			// Concatenamos um dos caracteres na variável $retorno
			$retorno .= $caracteres[$rand - 1];
		}
		return $retorno;
	}
	/*gets*/
	function getUsuarioByNome($email){
		$nomeUsuario 	= 	$this -> conexao -> selecionarRegistro("tbUsuario", "nomeUsuario", "WHERE emailUsuario = '{$email}'", "ORDER BY emailUsuario", "LIMIT 1");
		foreach ($nomeUsuario as $liste) {
			return 	$liste->nomeUsuario;
		}
	}
	function getUsuarioByEmail($email){
		$setUsuario = $this -> conexao -> selecionarRegistro("tbUsuario", "emailUsuario", "WHERE emailUsuario = '{$email}'", "ORDER BY emailUsuario", "LIMIT 1");
		foreach ($setUsuario as $liste) {
			return $liste->emailUsuario;
		}
	}
	function setPermissao($permissao,$usuario){
		$data = array('fkIdItem' => $permissao, 'fkIdUsuario' => $usuario);		
		return $this -> conexao -> inserirRegistro("tbPermissao", $data);
	}
}
?>
