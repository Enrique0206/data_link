<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include './includes/head.php';?>  
	  <link href="js/borrador.css" rel="stylesheet" type="text/css"/>
  </head>
  
	<body>
		
		<?php include './includes/header.php';?>
		<main class="content">
			<article class="item">
				<a href="">
					<h6>Título</h6>
					<p>Texto.</p>
				</a>
			</article>

			<article class="item">
			<h6>Título</h6>
					<p>Texto.</p>
			</article>
		</main>
		<?php include './includes/footer.php';?>
	  
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/ekko-lightbox.min.js" type="text/javascript"></script>
	<a href="js/ekko-lightbox.min.js.map"></a>
	
	<script src="js/js_compl.js"></script>
	
	<script>
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
    });
	/*evitar movimiento de carrousel automatico*/		
	$('.carousel').carousel({
			interval: false
	});
	</script>
	 </body>
</html>