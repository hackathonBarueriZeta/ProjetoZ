<ol class="breadcrumb">
	<li>
		<a href="../home/?action=1"><i class="fa fa-dashboard"></i> Home</a>
	</li>
	<?php 
		foreach ($caminho as $value) {
			if($value!="NULL"){
				echo "<li><a href='#'>{$value}</a></li>";	
			}		
		}
		echo "<li><a href='#'>{$tituloPagina}</a></li>";
	?>
</ol>

