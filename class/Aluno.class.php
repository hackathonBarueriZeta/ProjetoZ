<?php
/**
 *
 */
class Aluno extends ManipulaBanco {
	public $conexao;
	function cadastrarAluno($data){
		return $this->conexao->inserirRegistro("tbAluno", $data);
	}
	function getAlunoById($nomeAluno){
		$alunos 	=  $this->conexao->selecionarRegistro("tbAluno","idAluno","WHERE nomeAluno='{$nomeAluno}'","ORDER BY nomeAluno");
		
		foreach ($alunos as $liste) {
			return $liste->idAluno;
		}
	}
}
?>
