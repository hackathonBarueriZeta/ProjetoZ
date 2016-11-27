<li class="dropdown user user-menu">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		<img src="<?php echo $_SESSION["dadosusuario"]['imgUsuario']; ?>" class="user-image" alt="<?php echo $_SESSION["dadosusuario"]['nomeUsuario'];?>">
		<span class="hidden-xs"><?php echo $_SESSION["dadosusuario"]['nomeUsuario'];?></span>
	</a>
	<ul class="dropdown-menu">
		<!-- User image -->
		<li class="user-header">
			<img src="<?php echo $_SESSION["dadosusuario"]['imgUsuario']; ?>" class="img-circle" alt="<?php echo $_SESSION["dadosusuario"]['nomeUsuario'];?>">

			<p>
				<?php echo $_SESSION["dadosusuario"]['nomeUsuario'];?>
				<small><?php echo $_SESSION["dadosusuario"]['emailUsuario']; ?></small>
			</p>
		</li>
		<!-- Menu Body >
		<li class="user-body">
			<div class="row">
				<div class="col-xs-4 text-center">
					<a href="#">Receitas</a>
				</div>
				<div class="col-xs-4 text-center">
					<a href="#">Amigos</a>
				</div>
				<div class="col-xs-4 text-center">
					<a href="#">Evolução</a>
				</div>
			</div>
			<!-- /.row >
		</li-->
		<!-- Menu Footer-->
		<li class="user-footer">
			<div class="pull-left">
				<a href="#" class="btn btn-default btn-flat">Perfil</a>
			</div>
			<div class="pull-right">
				<a href="../home/logout.php" class="btn btn-default btn-flat">Sair</a>
			</div>
		</li>
	</ul>
</li>