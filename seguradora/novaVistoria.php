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
<style>
	.chip {
		display: inline-block;
		padding: 0 25px;
		height: auto;
		font-size: 18px;
		line-height: 48px;
		border-radius: 25px;		
		margin: 2px 2px 2px 2px;
	}	
	.closebtn {
		padding-left: 10px;
		color: #000;
		font-weight: bold;
		float: right;
		font-size: 20px;
		cursor: pointer;
	}

	.closebtn:hover {
		color: #111;
	}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="../dist/css/bootstrap-tagsinput.css">

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"></h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="form-group col-xs-12 col-md-3">
							<label for="txt_nome">Nome cliente </label>
							<input class="form-control input-lg" name="txtCliente" type="text" placeholder="Nome cliente" required maxlength="9">
						</div>
						<div class="form-group col-xs-12 col-md-3">
							<label for="txt_nome">Contato cliente </label>
							<input class="form-control input-lg" name="txtContato" type="text" placeholder="Contato na empresa" required maxlength="9">
						</div>
						<div class="form-group col-xs-12 col-md-2">
							<label for="txt_nome">Data limite para vistoria </label>
							<input class="form-control input-lg" name="txtDataVistoria" type="text" placeholder="Data vistoria" required=""  maxlength="9">
						</div>
						<div class="form-group col-xs-12 col-md-2">
							<label for="txt_nome">Quantia paga </label>
							<input class="form-control input-lg" name="txtValorPago" type="text" placeholder="Quantia paga" required=""  maxlength="9">
						</div>
						<div class="form-group col-xs-12 col-md-2">
							<label for="txt_nome">CEP </label>
							<input class="form-control input-lg" name="txtCep" type="text" placeholder="CEP" required maxlength="9">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-12 col-md-6">
							<label for="txt_nome">Habilidades do vistoriador </label>
							<input class="form-control input-lg" name="txtTag" type="text" placeholder="Habilidades do vistoriador" required maxlength="9">
							<!--input class="form-control input-lg" data-role="tagsinput" name="txtTag" type="text" placeholder="Qualificações do Vistoriador" required maxlength="9"-->
						</div>
						<?php $ambiente = new Ambiente;?>
						<div class="form-group col-xs-12 col-md-12">
							<div class="chip" style="background-color: <?php echo $ambiente->randomColor(); ?>;">
								Engenheiro Agronomo
								<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip" style="background-color: <?php echo $ambiente->randomColor(); ?>;">
								+10 Vistorias
								<span class="closebtn" onclick="this.parentElement.style.display='none'" >&times;</span>
							</div>
							<div class="chip" style="background-color: <?php echo $ambiente->randomColor(); ?>;">
								Geologo
								<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip" style="background-color: <?php echo $ambiente->randomColor(); ?>;">
								5 estrelas
								<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-12 col-md-6">
							<label for="txt_nome">Objetos </label>
							<input class="form-control input-lg" name="txtTag" type="text" placeholder="Objetos" required maxlength="9">
							<!--input class="form-control input-lg" data-role="tagsinput" name="txtTag" type="text" placeholder="Qualificações do Vistoriador" required maxlength="9"-->
						</div>
						<div class="form-group col-xs-12 col-md-12">
							<div class="chip" style="background-color: <?php echo $ambiente->randomColor(); ?>;">
								Fertilidade do solo
								<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip" style="background-color: <?php echo $ambiente->randomColor(); ?>;">
								Irrigação
								<span class="closebtn" onclick="this.parentElement.style.display='none'" >&times;</span>
							</div>
							<div class="chip" style="background-color: <?php echo $ambiente->randomColor(); ?>;">
								Saniamento
								<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip" style="background-color: <?php echo $ambiente->randomColor(); ?>;">
								Fertilizantes
								<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip" style="background-color: <?php echo $ambiente->randomColor(); ?>;">
								Armazenamento de fertilizantes
								<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
						</div>
					</div>
				</div><!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">
						Publicar
					</button>
				</div><!-- /.box-footer-->
			</div><!-- /.box -->
		</div>
	</div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../dist/js/bootstrap-tagsinput.min.js"></script>
