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
							<th>Seguradora</th>
							<th>Cliente</th>
							<th>Data progamada</th>
							<th>Data de expiração</th>
							<th>Contato</th>
						</tr>
					</thead>
					<tbody>						
							<tr>
								<td>Swiss Re</td>
								<td><a href="../home/?action=8">Microsoft</a></td>
								<td>27/11/2016 </td>
								<td>11/12/2016 </td>
								<td>Tio Bio</td>								
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