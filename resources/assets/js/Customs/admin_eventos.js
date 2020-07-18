
  $('body').on('click','.admin-boton-editar , .disparar-este-form',function(e)
  {
   e.preventDefault();   

   var form  = $(this).parents() ;  
   form.submit();
  });



