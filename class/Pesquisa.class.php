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
	function getTipoPesquisaByNome($idPesquisa) {
		$pesquisa = $this -> conexao -> selecionarRegistro("tbTipoPesquisa,tbPesquisa", "nomeTipoPesquisa", "WHERE idPesquisa = {$idPesquisa} AND fkIdTipoPesquisa = idTipoPesquisa", "ORDER BY idTipoPesquisa", "LIMIT 1");
		foreach ($pesquisa as $liste) {
			return $liste -> nomeTipoPesquisa;
		}
	}
	function getPesquisaByArquivo($idPesquisa) {
		$pesquisa = $this -> conexao -> selecionarRegistro("tbTipoPesquisa,tbPesquisa", "localPesquisa", "WHERE idPesquisa = {$idPesquisa} AND fkIdTipoPesquisa = idTipoPesquisa", "ORDER BY idTipoPesquisa", "LIMIT 1");
		foreach ($pesquisa as $liste) {
			return $liste -> localPesquisa;
		}
	}
	function getPesquisa($coordenador){
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbCoordenador,tbCurso","tituloPesquisa,statusPesquisa", "WHERE fkIdCursoPesquisa = idCurso AND idCurso = fkIdCursoCoordenador AND statusCurso = 1 AND fkIdUsuarioCoordenador = '{$coordenador}'");
	}
	/*function getPesquisaByCoordenador($coordenador){
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbCoordenador,tbCurso","tituloPesquisa,statusPesquisa", "WHERE fkIdCursoPesquisa = idCurso AND fkIdCursoCoordenador = idCurso AND fkIdUsuarioCoordeador = '{$coordenador}' ");
	}*/
	function getPesquisaByAvaliador($avaliador){		
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbAvaliador,tbAvaliadorProjeto","tituloPesquisa,statusPesquisa,idPesquisa,idAvaliador", "WHERE idAvaliador = fkIdAvaliadorProjeto AND idPesquisa = fkIdPesquisaAvaliadorProjeto AND fkIdUsuarioAvaliador = '{$avaliador}' ");
	}
	/*function getPesquisaByAvaliador($avaliador){
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbAvaliador,tbAvaliadorProjeto","tituloPesquisa,statusPesquisa", "WHERE fkIdUsuarioAvaliador = '{$avaliador}' AND emailUsuario = fkIdUsuarioAvaliador");
	}*/
	function getPesquisaByCoodenador($coordenador){
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbCoordenador,tbCurso","tituloPesquisa,statusPesquisa", "WHERE fkIdCursoPesquisa = idCurso AND idCurso = fkIdCursoCoordenador AND fkIdUsuarioCoordenador = '{$coordenador}'");
	}
	function getPesquisaById($tituloPesquisa){
		$pesquisa = $this-> conexao -> selecionarRegistro("tbPesquisa","idPesquisa", "WHERE tituloPesquisa = '{$tituloPesquisa}'","ORDER BY idPesquisa DESC ","LIMIT 1");
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
		//SELECT  FROM tbTipoPesquisa, tbCriterio, tbRotuloCriterio WHERE  2;
		return $this-> conexao -> selecionarRegistro("tbTipoPesquisa, tbCriterio, tbRotuloCriterio", "idCriterio,nomeRotuloCriterio, nomeCriterio, descricaoCriterio, pontoUmCriterio, pontoDoisCriterio, pontoTresCriterio", "WHERE idRotuloCriterio = fkIdRotuloCriterio AND idTipoPesquisa = fkIdPesquisaRotuloCriterio AND idTipoPesquisa = {$criterio}");
	}
	function getPesquisaByCoordenador($coordenador){		
		return $this-> conexao -> selecionarRegistro("tbPesquisa,tbCoordenador,tbCurso","tituloPesquisa,statusPesquisa,idPesquisa", "WHERE idCurso = fkIdCursoPesquisa AND fkIdCursoCoordenador AND fkIdUsuarioCoordenador = '{$coordenador}' ");
	}
	function getPesquisaByName($idPesquisa) {
		$pesquisa = $this -> conexao -> selecionarRegistro("tbPesquisa", "tituloPesquisa", "WHERE idPesquisa = {$idPesquisa}", "ORDER BY idPesquisa", "LIMIT 1");
		foreach ($pesquisa as $liste) {
			return $liste -> tituloPesquisa;
		}
	}
	function getAvaliacoes($coordenador){
		//		return $this -> conexao -> selecionarRegistro("tbPesquisa, tbCoordenador, tbCurso, tbAvaliador, tbAvaliadorProjeto, tbNota, tbUsuario", "nomeUsuario, fkIdAvaliadorProjetoNota, fkIdPesquisaProjetoNota, tituloPesquisa, fkIdUsuarioAvaliador, sum(valorNota) as notaAvaliacao", "WHERE emailUsuario = fkIdUsuarioAvaliador AND fkIdCursoCoordenador = idCurso AND fkIdUsuarioCoordenador = '{$coordenador}' AND fkIdCursoPesquisa = idCurso AND  fkIdAvaliadorProjeto = idAvaliador AND fkIdPesquisaAvaliadorProjeto = idPesquisa AND fkIdPesquisaProjetoNota = fkIdPesquisaAvaliadorProjeto AND fkIdAvaliadorProjetoNota = fkIdAvaliadorProjeto", "GROUP BY fkIdAvaliadorProjetoNota, fkIdPesquisaProjetoNota ORDER BY fkIdPesquisaProjetoNota", "");
		return $this -> conexao -> selecionarRegistro("tbPesquisa, tbCoordenador, tbCurso, tbAvaliador, tbAvaliadorProjeto, tbNota", "fkIdAvaliadorProjetoNota, fkIdPesquisaProjetoNota, tituloPesquisa, fkIdUsuarioAvaliador, sum(valorNota) as notaAvaliacao", "WHERE fkIdCursoCoordenador = idCurso AND fkIdUsuarioCoordenador = '{$coordenador}' AND fkIdCursoPesquisa = idCurso AND  fkIdAvaliadorProjeto = idAvaliador AND fkIdPesquisaAvaliadorProjeto = idPesquisa AND fkIdPesquisaProjetoNota = fkIdPesquisaAvaliadorProjeto AND fkIdAvaliadorProjetoNota = fkIdAvaliadorProjeto", "GROUP BY fkIdAvaliadorProjetoNota, fkIdPesquisaProjetoNota ORDER BY fkIdPesquisaProjetoNota", "");
	}
	function getnota($idPesquisa,$idAvaliador){
		return $this-> conexao -> selecionarRegistro("tbNota", "fkIdPesquisaProjetoNota", "WHERE fkIdAvaliadorProjetoNota = {$idAvaliador} AND fkIdPesquisaProjetoNota = {$idPesquisa}"); 
	}
	function getLinhaPesquisa($linhaPesquisa){		
		$pesquisa = $this-> conexao -> selecionarRegistro("tbLinhaPesquisa","idLinhaPesquisa", "where nomeLinhaPesquisa = '{$linhaPesquisa}' ");
		foreach ($pesquisa as $liste) {
			return $liste -> idLinhaPesquisa;
		}
	}
	function getLinhaPesquisaByNome($idLinhaPesquisa) {
		$pesquisa = $this -> conexao -> selecionarRegistro("tbPesquisa", "nomeLinhaPesquisa", "join tbLinhaPesquisa on fkIdLinhaPesquisa = idLinhaPesquisa where idPesquisa = {$idLinhaPesquisa}");
		foreach ($pesquisa as $liste) {
			return $liste -> nomeLinhaPesquisa;
		}
	}
}
?>
