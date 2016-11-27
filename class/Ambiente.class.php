<?php
/**
 *
 */
class Ambiente extends ManipulaBanco {
	public $arquivo, $conexao, $email, $perfil, $senha, $nome, $status;
	/* Metodos */
	function novoUsuario() {
		if (!(is_null($this -> email) && is_null($this -> senha) && is_null($this -> perfil))) {
			$data = array('fkIdPerfilUsuario' => $this -> perfil, 'emailUsuario' => $this -> email, 'senhaUsuario' => $this -> senha, 'nomeUsuario' => $this -> nome, 'statusUsuario' => $this -> status);
			$conexao = new ManipulaBanco;
			return $conexao -> inserirRegistro("tbUsuario", $data);
		} else {
			echo "Algo está errado. Não foi possível registrar seu usuário, por favor entre em contato com o suporte.";
			return FALSE;
		}

	}

	function randomColor() {
		//$letters = '0123456789ABCDEF';
		$letters = '89ABCDE7';
		$color = '#';
		for ($i = 0; $i < 6; $i++) {
			//$index = rand(0, 15);
			$index = rand(0, 7);
			$color .= $letters[$index];
		}
		return $color;
	}

	function autenticaUsuario() {
		$login = $this -> conexao -> selecionarRegistro("tbUsuario", "nomeUsuario,senhaUsuario,emailusuario,imgUsuario,statusUsuario,fkIdPerfilUsuario", "WHERE emailUsuario='" . $this -> email . "'", "ORDER BY emailUsuario", "LIMIT 1");
		if (!empty($login)) {
			foreach ($login as $value) {
				if ($value -> senhaUsuario == $this -> senha) {
					switch ($value->statusUsuario) {
						case '0' :
							//bloquado
							return 0;
							break;
						case '1' :
							//aguardando liberação
							return 1;
							break;
						case '2' :
							//primeiro acesso
							return 2;
							break;
						case '3' :
							//liberado
							$_SESSION["dadosusuario"] = array('emailUsuario' => $this -> email, 'nomeUsuario' => $value -> nomeUsuario, 'imgUsuario' => $value -> imgUsuario, 'perfilUsuario' => $value -> fkIdPerfilUsuario);
							/* Gravar o User-Agent para checagem posterior do solicitante*/
							$_SESSION['checkUsuario'] = md5("Y@nk87n2");
							return 3;
							break;
						default :
							echo "Usuário bloqueado, consulte o administrador do sistema";
							break;
					}
					switch ($value->fkIdPerfilUsuario) {
						case 1 :
							//Administrador
							break;
						case 2 :
							//Coordenador
							break;
						case 3 :
							//Orientador
							break;
						case 4 :
							//Avaliador
							break;
						default :
							$valida = FALSE;
							break;
					}

				} else {
					echo "Usuário ou Senha inválidos<br><a href='../index.php'>Voltar</a>";
				}
			}
		} else {
			echo "Ops! Algo está errado, verifique seu Usuário e senha.";
		}
	}

	function erroCriaPagina() {
		//$criaPagina->arquivo = 1;
		global $tituloPagina, $descricaoPagina, $caminho, $arquivo;
		$arquivo = "erro";
		//include "../erro/?action=0";
		$tituloPagina = "Arquivo inválido";
		$descricaoPagina = "Você está vendo essa tela porque algo deu errado.";
		$caminho = explode("/", "Erro");
	}

	/* Toodos os metodos GET são listados a seguir*/
	function getPermissao($idUsuario) {
		$permissao = $this -> conexao -> selecionarRegistro("tbCategoriaMenu, tbItemMenu, tbPermissao", "nomeCategoria,exibeNomeMenuItem,arquivoItem,idItem,iconeCategoria", "WHERE idCategoria = fkIdCategoriaItem AND fkIdItem = idItem AND fkIdUsuario='{$idUsuario}'", "ORDER BY nomeCategoria,exibeNomeMenuItem");
		return $permissao;
	}

	function getTituloPagina() {
		$registro = $this -> conexao -> selecionarRegistro("tbItemMenu", "tituloItem", "WHERE idItem ={$this->arquivo}", "ORDER BY idItem", "LIMIT 1");
		foreach ($registro as $valor) {
			return $valor -> tituloItem;
		}
	}

	function getBreadCrumb() {
		$registro = $this -> conexao -> selecionarRegistro("tbItemMenu", "caminhoItem", "WHERE idItem ={$this->arquivo}", "ORDER BY idItem", "LIMIT 1");
		foreach ($registro as $valor) {
			return $valor -> caminhoItem;
		}
	}

	function getDescricao() {
		$registro = $this -> conexao -> selecionarRegistro("tbItemMenu", "descricaoItem", "WHERE idItem ={$this->arquivo}", "ORDER BY idItem", "LIMIT 1");
		foreach ($registro as $valor) {
			return $valor -> descricaoItem;
		}
	}

	function getArquivo() {
		$registro = $this -> conexao -> selecionarRegistro("tbItemMenu", "arquivoItem", "WHERE idItem ={$this->arquivo}", "ORDER BY idItem", "LIMIT 1");
		foreach ($registro as $valor) {
			return $valor -> arquivoItem;
		}
	}

	function setmodal($tipoModal, $tituloModal, $corpoModal, $footerModal) {
		$struct = "<div class=\"modal fade\" id=\"dialog_confirm_map\" tabindex=\"-1\" role=\"dialog\" >
						<div class=\"modal-dialog\" role=\"document\">
							<div class=\"modal-content\">
								<div class=\"modal-header {$tipoModal}\">
									<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
										×
									</button>
									<h4 class=\"modal-title\">{$tituloModal}</h4>
								</div>
								<div class=\"modal-body\">
									<p>
										{$corpoModal}
									</p>
								</div>
								<div class=\"modal-footer\">
									{$footerModal}
								</div>
							</div>
						</div><
					</div>";
		return $struct;
		/*Exemplos
		 * Footer
		 * <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
		 Fechar
		 </button>
		 <button type=\"button\" class=\"btn btn-primary\">
		 ação
		 </button>
		 */
	}

}
?>
