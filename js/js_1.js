
/*parrafo 2do bloque*/
$(document).ready(
  function(){
    // Comprobar si estamos, al menos, 100 px por debajo de la posición top    
    $(window).scroll(function(){
      if ( $(this).scrollTop() > 360 ) {
        $('#servicios p').show(700); /*duracion 0.7 segundos - se puede poner otro tipo de efecto como fade in ver archivo evento scrooll*/
      } 
    });     
  });
/*parrafo 2do bloque*/

/*fade in a resenia*/
$(document).ready(function(){         
    $("#resenia h1").fadeIn(800);
    $("#resenia p").fadeIn(1000);   });
/*fade in a resenia*/


/*show en conceptos*/
$(document).ready(
  function(){
    // Comprobar si estamos, al menos, 100 px por debajo de la posición top    
    $(window).scroll(function(){
      if ( $(this).scrollTop() > 1500 ) {
        $("#conceptos p").show(700);
      };
    }); 
  });
/*show en conceptos*/

$('#exampleModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget); // Button that triggered the modal
	 var recipient = button.data('whatever'); // Extract info from data-* attributes
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this);
	modal.find('.modal-title').text(recipient);
	//modal.find('.modal-body input').val(recipient);
});

/*hover  titulo en ventas*/
$(document).ready(function(){
    $("#ventas button:eq(0)").hover(function(){
        $("#ventas h3:eq(0)").toggleClass("color_ventas");        
    });
     $("#ventas button:eq(1)").hover(function(){
        $("#ventas h3:eq(1)").toggleClass("color_ventas");        
    });
     $("#ventas button:eq(2)").hover(function(){
        $("#ventas h3:eq(2)").toggleClass("color_ventas");        
    });
     $("#ventas button:eq(3)").hover(function(){
        $("#ventas h3:eq(3)").toggleClass("color_ventas");        
    });
     $("#ventas button:eq(4)").hover(function(){
        $("#ventas h3:eq(4)").toggleClass("color_ventas");        
    });     
});
/*hover  titulo en ventas*/

/*hover fondo en ventas*/
$(document).ready(function(){
    $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(0)").hover(function(){          
        $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(0)").toggleClass("brillo"); 
    });
    $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(1)").hover(function(){          
        $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(1)").toggleClass("brillo"); 
    });
    $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(2)").hover(function(){          
        $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(2)").toggleClass("brillo"); 
    });
    $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(3)").hover(function(){          
        $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(3)").toggleClass("brillo"); 
    });
    $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(4)").hover(function(){          
        $("#ventas .row .col-lg-4.col-md-4.col-sm-4.col-xs-12:eq(4)").toggleClass("brillo"); 
    });    
});
/*hover fondo en ventas*/