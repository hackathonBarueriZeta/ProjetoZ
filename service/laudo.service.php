<?php
$conexao = new ManipulaBanco;
$skillVistoriador = $conexao->selecionarRegistro("tbSkillVistoriador","fkIdTagVistoriadorSkillVistoriador","WHERE fkIdVistoriadorSkillVistoriador = {$_GET['idVistoriador']}","ORDER BY fkIdVistoriadorSkillVistoriador");
$skillDesejo = $conexao->selecionarRegistro("tbSkillSolicitado","tafkIdTagVistoriadorSkillSolicitada","WHERE fkIdSolicitacaoVistoriaSkillSolicitada = {$_GET['idSolicitacao']}","ORDER BY fkIdSolicitacaoVistoriaSkillSolicitada");
$tagIdeal = array();
foreach ($skillDesejo as $liste) {	
	foreach ($skillVistoriador as $ideal) {
		if($liste->fkIdTagVistoriadorSkillVistoriador==$ideal->tafkIdTagVistoriadorSkillSolicitada){
			array_push($ideal->tafkIdTagVistoriadorSkillSolicitada,$tagIdeal);
		}		
	}
}
return json_encode($tagIdeal);
?>