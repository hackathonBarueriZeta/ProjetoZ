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

	.foto {
		background-image: url('../dist/img/camera_logo.png');
		background-repeat: no-repeat;
		background-position: center;
		height: 300px;
		width: 100%;
		border: dashed;
		opacity: 0.5;
	}

	.foto:hover {
		opacity: 1;
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

		/*$("#foto").hide();
		 $("#file").click(function() {
		 $("#file").hide();
		 $("#file2").hide();
		 $("#foto").show();
		 });*/

	});

</script>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Irrigação</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="form-group col-xs-12 col-md-6">
							<img src="../dist/img/fazenda.jpg">
						</div>
						<div class="form-group col-xs-12 col-md-6">
							<label for="txt_titulo">Relatório:</label>
							<textarea class="form-control" rows="13" placeholder="Informe o relatório...">Na região Nordeste, os investimentos feitos pelo setor público buscam estimular o desenvolvimento regional em uma área propensa a secas e com graves problemas sociais. Essas diferentes abordagens têm resultado em consequências diversas.</textarea>
						</div>
					</div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Armazenamento de fertilizantes</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="form-group col-xs-12 col-md-6">
							<label for="txt_titulo">Relatório:</label>
							<textarea class="form-control" rows="13" placeholder="Informe o relatório...">O armazenamento correto e as práticas de limpeza são sempre importantes para garantir um local de armazenamento seguro. Se possível, os fertilizantes devem ser armazenados em um depósito fechado e seguro para proteger o produto do tempo (sol, chuva, neblina etc.) e reduzir o risco de roubos.</textarea>
						</div>
						<div class="form-group col-xs-12 col-md-6">
							<img src="../dist/img/fertilizantes.jpg" width="420" height="300">
						</div>
					</div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Saniamentos</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="form-group col-xs-12 col-md-6">
							<div class="foto"></div>
						</div>
						<div class="form-group col-xs-12 col-md-6">
							<label for="txt_titulo">Relatório:</label>
							<textarea class="form-control" rows="13" placeholder="Informe o relatório..."></textarea>
						</div>
					</div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Fertilidade do solo</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="form-group col-xs-12 col-md-6">
							<label for="txt_titulo">Relatório:</label>
							<textarea class="form-control" rows="13" placeholder="Informe o relatório..."></textarea>
						</div>
						<div class="form-group col-xs-12 col-md-6">
							<div class="foto"></div>
						</div>
					</div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Fertilizantes</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="form-group col-xs-12 col-md-6">
							<div class="foto"></div>
						</div>
						<div class="form-group col-xs-12 col-md-6">
							<label for="txt_titulo">Relatório:</label>
							<textarea class="form-control" rows="13" placeholder="Informe o relatório..."></textarea>
						</div>
					</div>
				</div><!-- /.box-body -->
				<div class="box-footer">
					<div class="row">
						<div class="form-group col-xs-12 col-md-12">
							<button type="submit" class="btn btn-primary">
								Enviar
							</button>
						</div>
					</div>
				</div>
			</div><!-- /.box -->
		</div>
	</div>

</section>