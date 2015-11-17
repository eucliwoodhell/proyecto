<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>proyecto</title>
		<!-- Los css de bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>css/login.css">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>img/apple-touch-icon.png"/>
	</head>
	<body>
		<p></p>
		<p></p>
		<br>
		<br>
		<div class="container">
				<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
								<div class="panel panel-default">
										<div class="panel-body">
												<h3><small>Sistema de pedidos</small></h3><hr/>
													<?php echo form_open('ControladorLogin'); ?>
														<div class="form-group">
															<label for="username">Usuario</label>
															<input type="text" class="form-control" id="username" name="username" placeholder="Introduzca su nombre de Usuario">
														</div>
														<div class="form-group">
															<label for="password">Clave</label>
															<input type="password" class="form-control" id="password" name="password" placeholder="Introduzca su Clave">
														</div>
														<button type="submit" class="btn btn-primary">Ingresar</button>
													<?php echo form_close(); ?>
													<br>
													<?php echo validation_errors('<div class="form-group">','</div>'); ?>
									</div>
								</div>
						</div>
						<div class="col-md-4"></div>
				</div>
		</div>
		<!-- jQuery (necesario para Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
    <!-- Debe incluir los componentes de bootstrap-->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
	</body>
</html>
