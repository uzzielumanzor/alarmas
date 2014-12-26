<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Lista de Alertas Globales</title>
		<script src="jquery-ui-1.11.1/external/jquery/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		
	</head>
	<body>
		<div id="contenedor">
			<div id="body">
				<h2 align="center" id="titulo">Iniciar Sesion</h2>
				<?php
					echo validation_errors();
					$attributes = array('id' => 'loginForm'); 
					echo form_open('validarlogin', $attributes); 
					$user = array(
			        	'name' => 'user',
			            'id' => 'user',
			            'type' => 'text',
			            'autofocus' => 'true',
			            'required' => 'required',
			            'value' => '',
			            'placeholder' => 'Usuario'
			           
			     	);

			     	$pass = array(
			        	'name' => 'pass',
			            'id' => 'pass',
			            'type' => 'password',
			            'required' => 'required',
			            'value' => '',
			            'placeholder' => 'Contraseña'
			     	);

					echo form_input($user);			
					echo br();
					echo br(); 
					echo form_password($pass);
					echo br();
					echo br();
					$boton = array(
						'value' => 'Enviar',
						'id' => 'send'
					);
				 	echo form_submit($boton);
				 	echo form_close(); 
				?>
			</div>
		</div>
	</body>

</html>