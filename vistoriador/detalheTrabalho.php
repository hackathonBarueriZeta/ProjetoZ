<style>
	.tt-dropdown-menu {

		width: 100%;
		margin-top: 5px;
		padding: 8px 12px;
		background-color: #fff;
		border: 1px solid #ccc;
		border: 1px solid rgba(0, 0, 0, 0.2);
		border-radius: 8px 8px 8px 8px;
		font-size: 18px;
		color: #111;
		background-color: #F1F1F1;
	}

	.tt-query {

		width: 100%;
	}

</style>

<script src="../plugins/jQuery/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../dist/js/typeahead.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<script>
	$(document).ready(function() {

	});
</script>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Interresse em vistoria</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="form-group col-xs-12 col-md-12">
							<label>Seguradora:</label> Swiss Re
							<br>
							<label>Valor:</label> R$ 125,00
							<br>
							<label>Data limite da vistoria:</label> 27/11/2016
							<br>
							<label>Contato do cliente:</label> Marcos
							<br>
							<label>Itens da vistoria:</label> Carro, Barco, Avião e Fazenda.
							<br>
							<label>Endereço:</label> Av. Carlos Capriotti, 123 - Centro, Barueri - SP, 06401-136, Brasil.
							<br>
							<br>
							<label>Local da vistoria:</label>
							<br>
							<?php
							$latitude = str_replace(".", "k", "-23.50834573");
							$longitude = str_replace(".", "k", "-46.86454028");
							$link = "http://" . $_SERVER['HTTP_HOST'] . str_replace('home/index.php', '', $_SERVER['SCRIPT_NAME']) . "vistoriador/mapa.php?latitude=" . $latitude . "&longitude=" . $longitude;
							?>
							<iframe src="<?php echo($link); ?>" width="100%" height="300px"></iframe>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-12 col-md-12">							
							<div id="local">
								<label>Distancia aproximada:</label> 350 km<br>
								<label>Veículo recomendado:</label> Carro<br>
								<label>Tempo estimado:</label> 4h
							</div>
						</div>
					</div>
				</div><!-- /.box-body -->
				<div class="box-footer">
					<div class="row">
						<div class="form-group col-xs-12 col-md-12">
							<a href="../home/?action=7" class="btn btn-primary">
								Emitir Laudo
							</a>
						</div>
					</div>
				</div>
			</div><!-- /.box -->
		</div>
	</div>

</section>