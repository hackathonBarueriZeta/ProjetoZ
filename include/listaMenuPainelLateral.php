<?php 	$permissao = $criaPagina -> getPermissao($_SESSION["dadosusuario"]['emailUsuario']);
		if ($permissao) {
			$categoria = null;
			foreach ($permissao as $value) {
				if($value->nomeCategoria!="Invisivel"){
					if ($value -> nomeCategoria != $categoria) {
					if ($categoria != null) {
						echo "</ul>";
					}
					echo "<li class=\"treeview active\">
							<a href=\"#\"> <i class=\"fa " . $value -> iconeCategoria . "\"></i><span>" . $value -> nomeCategoria . "</span>
							<span class=\"pull-right-container\"> <i class=\"fa fa-angle-left pull-right\"></i> </span> 
							</a>
							<ul class=\"treeview-menu\">";
				}
				echo 	"<li>
							<a href=\"?action=" . $value -> idItem . "\"><i class=\"fa fa-circle-o\"></i>" . $value -> exibeNomeMenuItem . "</a>
						</li>";
				$categoria = $value -> nomeCategoria;
				}
				
			}
			echo "</ul>";
		}?>
