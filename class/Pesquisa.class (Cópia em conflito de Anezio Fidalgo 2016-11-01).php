<?php
/**
 *
 */
class Pesquisa extends ManipulaBanco {
	public $conexao;
	function cadastrarPesquisa($data){		
		return $this->conexao->inserirRegistro("tbPesquisa", $data);
	}
	function cadastrarMembroProjeto($idPesquisa,$idAlunos) {	
		$data = array('fkIdArtigoMembroProjeto' => $idPesquisa, 'fkIdAlunoMembroProjeto' => $idAlunos);	
		return $this->conexao->inserirRegistro("tbMembroProjeto", $data);
	}
	function getTipoPesquisaById($nomeTipoPesquisa) {
		$pesquisa = $this -> conexao -> selecionarRegistro("tbTipoPesquisa", "idTipoPesquisa", "WHERE nomeTipoPesquisa = '{$nomeTipoPesquisa}'", "ORDER BY idTipoPesquisa", "LIMIT 1");
		foreach ($pesquisa as $liste) {
			return $liste -> idTipoPesquisa;
		}
	}
	function getPesquisa($coordenador){
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbCoordenador,tbCurso","tituloPesquisa,statusPesquisa", "WHERE fkIdCursoPesquisa = idCurso AND idCurso = fkIdCursoCoordenador AND statusCurso = 1 AND fkIdUsuarioCoordenador = '{$coordenador}'");
	}
	/*function getPesquisaByCoordenador($coordenador){
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbCoordenador,tbCurso","tituloPesquisa,statusPesquisa", "WHERE fkIdCursoPesquisa = idCurso AND fkIdCursoCoordenador = idCurso AND fkIdUsuarioCoordeador = '{$coordenador}' ");
	}*/
	function getPesquisaByAvaliador($avaliador){		
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbAvaliador,tbAvaliadorProjeto","tituloPesquisa,statusPesquisa,idPesquisa", "WHERE idAvaliador = fkIdAvaliadorProjeto AND idPesquisa = fkIdPesquisaAvaliadorProjeto AND fkIdUsuarioAvaliador = '{$avaliador}' ");
	}
	/*function getPesquisaByAvaliador($avaliador){
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbAvaliador,tbAvaliadorProjeto","tituloPesquisa,statusPesquisa", "WHERE fkIdUsuarioAvaliador = '{$avaliador}' AND emailUsuario = fkIdUsuarioAvaliador");
	}*/
	function getPesquisaByCoodenador($coordenador){
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbCoordenador,tbCurso","tituloPesquisa,statusPesquisa", "WHERE fkIdCursoPesquisa = idCurso AND idCurso = fkIdCursoCoordenador AND fkIdUsuarioCoordenador = '{$coordenador}'");
	}
	function getPesquisaById($tituloPesquisa){
		$pesquisa = $this-> conexao -> selecionarRegistro("tbPesquisa","idPesquisa", "WHERE tituloPesquisa = '{$tituloPesquisa}'","ORDER BY tituloPesquisa","LIMIT 1");
		foreach ($pesquisa as $liste) {
			return $idPesquisa = $liste->idPesquisa;
		}
	}
	function getCriterio($idPesquisa){
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbCriterio,tbTipoPesquisa,tbUsuario, tbAvaliador", "idCriterio,idPesquisa,emailUsuario", "WHERE emailUsuario = fkIdUsuarioAvaliador AND idCriterio = fkIdCriterioAvaliador AND idPesquisa = fkIdPesquisaAvaliador AND idTipoPesquisa = fkIdTipoPesquisaCriterio AND idPesquisa = '{$idPesquisa}'");
	}
	function cadastrarAvaliador($data){
		return $this->conexao->inserirRegistro("tbAvaliador", $data);
	}
	
	function setAvaliadorProjeto($avaliador, $projeto){
		$data = array('fkIdAvaliadorProjeto' => $avaliador, 'fkIdPesquisAvaliadorProjeto'=>$projeto);
		return $this->conexao->inserirRegistro("tbAvaliadorProjeto", $data);
	}
	function getCriterioAvaliacao($criterio){
		return $this-> conexao -> selecionarRegistro("tbTipoPesquisa, tbCriterio, tbRotuloCriterio", "idCriterio,nomeRotuloCriterio, nomeCriterio, descricaoCriterio, pontoUmCriterio, pontoDoisCriterio, pontoTresCriterio", "WHERE idRotuloCriterio = fkIdRotuloCriterio AND idTipoPesquisa = fkIdPesquisaRotuloCriterio AND fkIdPesquisaRotuloCriterio = {$criterio}");
	}
	function getPesquisaByCoordenador($coordenador){		
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbCoordenador,tbCurso","tituloPesquisa,statusPesquisa,idPesquisa", "WHERE idCurso = fkIdCursoPesquisa AND fkIdCursoCoordenador AND fkIdUsuarioCoordenador = '{$coordenador}' ");
	}
}
?>
