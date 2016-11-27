<?php $_SESSION['requestNutricionista'] = "editarNutricionista"; ?>
<?php if($_GET['action']!=5){ ?>
<script type="text/javascript">
	$(document).ready(function() {
		BootstrapDialog.show({
			title : 'Definir paciente',
			message : '<div class=\"row\">' + '<div class=\"form-group col-xs-12 col-md-12\">' + '<label for=\"txt_paciente\">Selecione um paciente</label>' + '<input class=\"form-control input-lg\" name=\"txt_paciente\" type=\"date\" placeholder=\"Paciente\">' + '</div>' + '</div>',
			buttons : [{
				label : 'Fechar',
				action : function(result) {
					if (result) {
						$.post('buscapasciente.php', consultaFicha, function(retorna) {
							
						}
					} else {
						
					}
				}
			}],
			closable: false
		});

	});
</script>
<?php }
$footer = "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
					Close
				</button>
				<button type=\"button\" class=\"btn btn-primary\">
					Save changes
				</button>";
$tituloPagina = "Definir Paciente";
$corpoModal = "";
	echo $criaPagina->setModal("bg-aqua",$tituloPagina,$corpoModal,$footer);
	$modal = TRUE;
?>
<section class="content">
         <form>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de Nutricionistas</h3>              
            </div>
            <div class="box-body">
            		<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Nome Nutricionista</th>
											<th>CRN</th>
											<th>Data de Cadastro</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$listaNutricionista = new Nutricionista;
											$listaNutricionista ->conexao = new ManipulaBanco;
											$registro = $listaNutricionista ->listarNutricionista();
											foreach ($registro as $liste) {
										?>
										<tr>
											<td><?php echo $liste -> nomeNutricionista; ?></td>
											<td><?php echo $liste -> crnNutricionista; ?></td>
											<td><?php echo implode("/", array_reverse(explode("-", $liste -> dataCadastroNutricionista))); ?></td>
										</tr>
										<?php } ?>
									</tbody>
									<tfoot>
										<tr>
											<th>Nome Nutricionista</th>
											<th>CRN</th>
											<th>Data de Cadastro</th>
										</tr>
									</tfoot>
								</table>
            </div><!-- /.box-body -->
            <div class="box-footer">
              
            </div><!-- /.box-footer-->            
          </div><!-- /.box -->
          </form>
        </section><!-- /.content -->