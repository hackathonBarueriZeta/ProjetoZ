<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<section class="content">
	<form name="frm_novo_nutricionista" action="../processa/?action=3" method="post">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Vistorias</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example0" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Cliente</th>
							<th>Data de expiração</th>
							<th style="width: 10px">Vistoriadores</th>
						</tr>
					</thead>
					<tbody>
						
							<tr>
								<td><a href="../seguradora/?action=12">MF Rural</a>  </td>
								<td>27/11/2016 </td>
								<td><span class="badge bg-light-blue">8</span></td>
							</tr>
							<tr>
								<td><a href="../seguradora/?action=12">Jamef </a></td>
								<td>12/12/2016  </td>
								<td><span class="badge bg-light-blue">5</span></td>
							</tr>
							<tr>
								<td><a href="../seguradora/?action=12">DHL </a></td>
								<td>08/12/2016  </td>
								<td><span class="badge bg-light-blue">12</span></td>
							</tr>
							<tr>
								<td><a href="../seguradora/?action=12">Microsoft </a></td>
								<td>11/12/2016   </td>
								<td><span class="badge bg-light-blue">52</span></td>
							</tr>
							<tr>
								<td><a href="../seguradora/?action=12">Unimed </a></td>
								<td>30/11/2016    </td>
								<td><span class="badge bg-light-blue">35</span></td>
							</tr>
							<tr>
								<td><a href="../seguradora/?action=12">Shopping Eldorado  </a></td>
								<td>01/12/2016 </td>
								<td><span class="badge bg-light-blue">23</span></td>
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