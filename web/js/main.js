   
//Código para inicializar Menú de hamburguesa, slider y fotos parallax
$( document ).ready(function(){
    $(".button-collapse").sideNav();
    $('.slider').slider();
    $('.parallax').parallax();
});
// Lineas de código para Combobox y searchbox
$(document).ready(function() {
    $('select').material_select();
  });

 $('select').material_select('destroy');

//Código para inicializar Material Box
 $(document).ready(function(){
    $('.slider').slider()
  });

//Inicialización del tooltip
 $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });

// Inicialización del Modal
$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
  $(".dropdown-trigger").dropdown();
  
});

