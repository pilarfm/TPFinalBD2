function Hola(nombre) {
    var parametros = {"Nombre":nombre};
$.ajax({
   data:parametros,
   url:'procesoAjax.php',
   type: 'post',
   beforeSend: function () {
       $("#resultado").html("Procesando, espere por favor");
   },
   success: function (response) {   
       $("#resultado").html(response);
   }
});
}

function mostrarRegistar(nombre) {
    var parametros = {"Nombre":nombre};
$.ajax({
   data:parametros,
   url:'procesarRegistro.php',
   type: 'post',
   beforeSend: function () {
       $("#historial").html("Procesando, espere por favor");
   },
   success: function (response) {   
       $("#historial").html(response);
   }
});
}
