<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include './includes/head.php';?>     
	  
    <link href="css/style_contact.css" rel="stylesheet" type="text/css">
	</head>
  
	<body>
		<?php include './includes/header.php';?>
		
		
			
		<div id="tit_comp" class="container-fluid">
				<h1 class="fuente_tit_sub text-center">CONTACTANOS</h1>
		</div>
			
		<div id="contacto" class="container-fluid">
			<div id="select_cont" class="container">
				<form action="" method="" role="form" enctype="">
					<div class="row container">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<p>Para cualquier consulta, atendemos las 24 horas del dia.</p>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group clase_input">								
										<input type="name" name="name" id="name" placeholder="Nombre" required>
									</div>						
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group clase_input">								
										<input type="email" name="correo" id="correo" placeholder="Email" required>
									</div>	
								</div>	
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group clase_input">								
										<input type="tel" name="telefono" id="telefono" placeholder="Telefono" required>
									</div>
								</div>	
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group clase_input">								
										<input type="text" name="asunto" id="asunto" placeholder="Asunto" required>
									</div>						
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group clase_input">								
										<input name="mensaje" id="mensaje" placeholder="Mensaje" required>
									</div>									  			
								</div>		
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-2"></div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-8">
									<div class="form-group clase_input">								
										<input type="submit" value="Enviar">
									</div>						
								</div>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-2"></div>
							</div>
						</div>						
					</div>					
				</form>
			</div>
		</div>
	
	
		<?php include './includes/footer.php';?>
	  
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/ekko-lightbox.min.js" type="text/javascript"></script>
	<a href="js/ekko-lightbox.min.js.map"></a>
	
	 </body>
</html>
