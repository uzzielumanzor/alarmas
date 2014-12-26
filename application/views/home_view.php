<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/home.css') ?>">
</head>
<body>
	
 	<DIV id="container">
 		<a href="home/logout">Salir</a>
	 	<div id="body">
	  		<h2 align="center">Alarmas Globales</h2>
	  		<ul>
	  			<?php
	  				foreach ($alarma as $row) {			 	
	  			?>
	  				<li>
	  				<p class="coment"><strong>Comentario: </strong><?php echo $row->comentario; ?></p>
	  				<p class="fecha"><strong>Fecha:</strong><?php echo $row->fecha; ?></p>
	  				<p class="ciudad"><strong>Ciudad:</strong><?php echo $row->ciudad; ?></p>
	  				</li>
	  			<?php 
	  				}
	  			?>
			</ul>
		</div>	
	</DIV>
 </body>
</html>