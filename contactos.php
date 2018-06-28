<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include './includes/head.php';?>  	  
    
	</head>
  
	<body>
		
		<?php include './includes/header.php';?>		
			
		<div id="tit_comp" class="container-fluid">
			<h1 class="fuente_tit_sub text-center">CONTACTANOS</h1>
		</div>
			
		<div id="contacto" class="container-fluid">			
			<div id="select_cont" class="container tamanio_texto">
				<form action="" method="" role="form" enctype="">
					<div class="row container">
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 foo">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group clase_input">								
										<input type="name" name="name" id="name" placeholder="Nombre" required autocomplete="off">
									</div>						
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group clase_input">								
										<input type="email" name="correo" id="correo" placeholder="Email" required autocomplete="off">
									</div>	
								</div>	
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group clase_input">								
										<input type="tel" name="telefono" id="telefono" placeholder="Telefono" required autocomplete="off">
									</div>
								</div>	
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group clase_input">								
										<input type="text" name="asunto" id="asunto" placeholder="Asunto" required autocomplete="off">
									</div>						
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div id="message" class="form-group clase_input">								
										<input style="width: 100%; transition: 0.7s" name="message" id="mensaje" placeholder="Mensaje" required autocomplete="off">
									</div>									  			
								</div>		
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4"></div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
									<div id="boton" class="form-group text-center">								
										<button>Enviar</button>										
									</div>						
								</div>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4"></div>
							</div>
						</div>	
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
					</div>					
				</form>
			</div>
		</div>	
	
		<?php include './includes/footer.php';?>
	  
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/ekko-lightbox.min.js" type="text/javascript"></script>
	<a href="js/ekko-lightbox.min.js.map"></a>
	<script src="js/scrollreveal.min.js"></script>
	<script src="js/plugin_contacto.js"></script>
	
	 </body>
</html>
