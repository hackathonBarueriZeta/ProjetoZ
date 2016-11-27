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

	.estrelas input[type=radio] {
		display: none;
		font-size: 60px;
	}
	.estrelas label i.fa:before {
		content: '\f005';
		color: #FC0;
		font-size: 60px;
	}
	.estrelas input[type=radio]:checked ~
	label i.fa:before {
		color: #CCC;
		font-size: 60px;
	}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="../dist/css/bootstrap-tagsinput.css">

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Avaliação do laudo</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="form-group col-xs-12 col-md-12">
							<label>Nome:</label> Beatriz Garcia
							<br>
							<label>Cliente:</label> Barueri
							<br>
							<h2>Irrigação</h2>
							<div class="row">
								<div class="form-group col-xs-12 col-md-6">
									<img src="../dist/img/fazenda.jpg">
								</div>
								<div class="form-group col-xs-12 col-md-6">
									<div width="430" height="300">
										Na região Nordeste, os investimentos feitos pelo setor público buscam estimular o desenvolvimento regional em uma área propensa a secas e com graves problemas sociais. Essas diferentes abordagens têm resultado em consequências diversas.A Irrigação no Brasil foi desenvolvida por meio do uso de diferentes modelos. O envolvimento público na irrigação é relativamente novo, enquanto o investimento privado tem sido tradicionalmente responsável pelo desenvolvimento da irrigação. A irrigação privada predomina nas regiões povoadas do Sul, Sudeste e Centro-Oeste, onde ocorre a maior parte do desenvolvimento industrial e agrícola do país. Na região Nordeste, os investimentos feitos pelo setor público buscam estimular o desenvolvimento regional em uma área propensa a secas e com graves problemas sociais. Essas diferentes abordagens têm resultado em consequências diversas. Dos 120 milhões de hectares (ha) potencialmente disponíveis para a agricultura, somente cerca de 3,5 milhões de hectares estão atualmente irrigados, embora as estimativas mostrem que 29 milhões desses hectares sejam adequados para essa prática.</textarea>
									</div>
								</div>
							</div>
							<br>
							<br>
							<h2>Armazenamento de fertilizantes</h2>
							<div class="row">
								<div class="form-group col-xs-12 col-md-6">
									<div width="430" height="300">
										O armazenamento correto e as práticas de limpeza são sempre importantes para garantir um local de armazenamento seguro. Se possível, os fertilizantes devem ser armazenados em um depósito fechado e seguro para proteger o produto do tempo (sol, chuva, neblina etc.) e reduzir o risco de roubos.Tenha em mente que alguns fertilizantes são sensíveis a altas temperaturas e não devem ser armazenados em silos expostos à luz do sol. Certifique-se de que o silo esteja bem fechado durante o armazenamento. O abafador, o enchimento e os tubos de ventilação devem estar adequadamente selados para evitar a ventilação.O fertilizante para armazenagem em silo é descarregado por um caminhão granel. Durante a injeção, a pressão não deve ultrapassar 0,15 MPa = 1,5 kgf/cm2. Isso serve para evitar a deterioração do grão, criando, assim, poeira. Para um manuseio mais leve, certifique-se de que o tubo de insuflação esteja levemente dobrado com um grande raio de curvatura, sem graus internos ou pontas afiadas.</textarea>
									</div>
								</div>
								<div class="form-group col-xs-12 col-md-6">
									<img src="../dist/img/fertilizantes.jpg" width="450" height="330">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-12 col-md-12">
									<label>Qual é a sua avaliação sobre o laudo emitido?</label>
									<div class="vote">
										<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
										<div class="estrelas">
											<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
											<label for="cm_star-1"><i class="fa"></i></label>
											<input type="radio" id="cm_star-1" name="fb" value="1"/>
											<label for="cm_star-2"><i class="fa"></i></label>
											<input type="radio" id="cm_star-2" name="fb" value="2"/>
											<label for="cm_star-3"><i class="fa"></i></label>
											<input type="radio" id="cm_star-3" name="fb" value="3"/>
											<label for="cm_star-4"><i class="fa"></i></label>
											<input type="radio" id="cm_star-4" name="fb" value="4"/>
											<label for="cm_star-5"><i class="fa"></i></label>
											<input type="radio" id="cm_star-5" name="fb" value="5"/>
										</div>
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
