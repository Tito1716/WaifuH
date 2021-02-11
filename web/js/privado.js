$(document).ready(function() {
  $('select').material_select();
});
// inicializar el side bar del sitio privado
$(".button-collapse").sideNav();
//combobox de permisos
//date picker
var elem = document.querySelector('.datepicker');
  var instance = M.Datepicker.init(elem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });