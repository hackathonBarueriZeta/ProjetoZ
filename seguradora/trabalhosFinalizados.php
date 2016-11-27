<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<section class="content">
	<form name="frm_novo_nutricionista" action="../processa/?action=3" method="post">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Trabalhos pendentes</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example0" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Vistoriador</th>
							<th>Local</th>
							<th>Data da vistoria</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="../home/?action=14">Beatriz Garcia</a></td>
							<td>Barueri</td>
							<td>IBM</td>
							<td>27/11/2016 </td>
						</tr>
					</tbody>

				</table>
			</div>
			<!-- /.box-body -->
		</div>
	</form>
</section><!-- /.content -->
<?php $tabela = TRUE;
	$jquery = TRUE;
	$nomeTabela = "example";
	$contTable = 0;
?>