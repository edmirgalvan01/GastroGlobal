$(document).on('click','.edit', function(){
   var id=$(this).attr('data-id');
   var foto=$('#foto_'+id).attr('data-foto');
   var nom=$('#nomb_1'+id).text();
   var especi=$('#especi_1'+id).text();
   var descrip=$('#descrip_1'+id).text();
   alert(nom);
   var ruta='../img/'+foto;

   $('#id_m').val(id);
   $('#imagen_m').attr('src',ruta);
   $('#nombre_m').val(nom);
   $('#especialidad_m').val(especi);
   $('#descrip_m').val(descrip);
       //alert(id);
      $('#id_editar').val(id);
});


$(document).on('click', '#update_restaurant', function () {
   var date = new FormData(document.getElementById('form_editar_restaurant')); 
   $.ajax({
      type: 'post',
      url: 'scripts/modificar_rest.php',
      data: date, 
      contentType: false,
      processData: false,
   }).done(function (resultado){});
     //alert(resultado); 
});
