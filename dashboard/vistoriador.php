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

		$("#foto").hide();
		$("#file").click(function() {
			$("#file").hide();
			$("#file2").hide();
			$("#foto").show();
		});

	});

</script>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Avaliação</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-3 col-xs-12">
							<div class="small-box bg-teal">
								<div class="inner">
									<p><b>Allianz</p></b>

									<p>
										R$ 125,00
									</p>
									<p>
										Até 27/11/2016
									</p>
								</div>
								<div class="icon">
									<img src="../dist/img/allianz.png" width="100" height="100">
								</div>
								<a href="<?php echo("http://" . $_SERVER['HTTP_HOST'] . str_replace('home/index.php', '', $_SERVER['SCRIPT_NAME']) . "home/?action=6"); ?>" class="small-box-footer"> Mais informações <i class="fa fa-arrow-circle-right"></i> </a>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="small-box bg-teal">
								<div class="inner">
									<p><b>Mapfre</p></b>

									<p>
										R$ 125,00
									</p>
									<p>
										Até 27/11/2016
									</p>
								</div>
								<div class="icon">
									<img src="../dist/img/mapfre-logo.png" width="100" height="100">
								</div>
								<a href="<?php echo("http://" . $_SERVER['HTTP_HOST'] . str_replace('home/index.php', '', $_SERVER['SCRIPT_NAME']) . "home/?action=6"); ?>" class="small-box-footer"> Mais informações <i class="fa fa-arrow-circle-right"></i> </a>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="small-box bg-teal">
								<div class="inner">
									<p><b>Swiss Re</b></p>

									<p>
										R$ 125,00
									</p>
									<p>
										Até 27/11/2016
									</p>
								</div>
								<div class="icon">
									<img src="../dist/img/swissRe.png" width="95" height="95">
								</div>
								<a href="<?php echo("http://" . $_SERVER['HTTP_HOST'] . str_replace('home/index.php', '', $_SERVER['SCRIPT_NAME']) . "home/?action=6"); ?>" class="small-box-footer"> Mais informações <i class="fa fa-arrow-circle-right"></i> </a>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="small-box bg-teal">
								<div class="inner">
									<p><b>Liberty</p></b>

									<p>
										R$ 125,00
									</p>
									<p>
										Até 27/11/2016
									</p>
								</div>
								<div class="icon">
									<img src="../dist/img/liberty.png" width="95" height="95">
								</div>
								<a href="<?php echo("http://" . $_SERVER['HTTP_HOST'] . str_replace('home/index.php', '', $_SERVER['SCRIPT_NAME']) . "home/?action=6"); ?>" class="small-box-footer"> Mais informações <i class="fa fa-arrow-circle-right"></i> </a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-xs-12">
							<div class="small-box bg-teal">
								<div class="inner">
									<p><b>Zurich</p></b>

									<p>
										R$ 125,00
									</p>
									<p>
										Até 27/11/2016
									</p>
								</div>
								<div class="icon">
									<img src="../dist/img/zurich.png" width="95" height="95">
								</div>
								<a href="<?php echo("http://" . $_SERVER['HTTP_HOST'] . str_replace('home/index.php', '', $_SERVER['SCRIPT_NAME']) . "home/?action=6"); ?>" class="small-box-footer"> Mais informações <i class="fa fa-arrow-circle-right"></i> </a>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="small-box bg-teal">
								<div class="inner">
									<p><b>Swiss Re</p></b>

									<p>
										R$ 125,00
									</p>
									<p>
										Até 27/11/2016
									</p>
								</div>
								<div class="icon">
									<img src="../dist/img/swissRe.png" width="95" height="95">
								</div>
								<a href="<?php echo("http://" . $_SERVER['HTTP_HOST'] . str_replace('home/index.php', '', $_SERVER['SCRIPT_NAME']) . "home/?action=6"); ?>" class="small-box-footer"> Mais informações <i class="fa fa-arrow-circle-right"></i> </a>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="small-box bg-teal">
								<div class="inner">
									<p><b>Swiss Re</p></b>

									<p>
										R$ 125,00
									</p>
									<p>
										Até 27/11/2016
									</p>
								</div>
								<div class="icon">
									<img src="../dist/img/swissRe.png" width="95" height="95">
								</div>
								<a href="<?php echo("http://" . $_SERVER['HTTP_HOST'] . str_replace('home/index.php', '', $_SERVER['SCRIPT_NAME']) . "home/?action=6"); ?>" class="small-box-footer"> Mais informações <i class="fa fa-arrow-circle-right"></i> </a>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="small-box bg-teal">
								<div class="inner">
									<p><b>Porto Seguro</p></b>

									<p>
										R$ 125,00
									</p>
									<p>
										Até 27/11/2016
									</p>
								</div>
								<div class="icon">
									<img src="../dist/img/Porto-Seguro.png" width="95" height="95">
								</div>
								<a href="<?php echo("http://" . $_SERVER['HTTP_HOST'] . str_replace('home/index.php', '', $_SERVER['SCRIPT_NAME']) . "home/?action=6"); ?>" class="small-box-footer"> Mais informações <i class="fa fa-arrow-circle-right"></i> </a>
							</div>
						</div>
					</div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>

</section>