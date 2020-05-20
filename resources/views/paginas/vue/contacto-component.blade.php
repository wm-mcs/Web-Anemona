Vue.component('contacto-component' ,
{
props:['empresa','color']
,  
data:function(){
    return {
      data_mensaje: {name:'',
                      email:'',
                      mensaje:'',
                      presupuesto:'',
                      que_vendes:'',
                      pais:'',
                      que_necesitas:[],
                      tipo_consulta_de_easy:'',
                      celular:'',
                      nombre_empresa:''},


      se_envio:false,
      mensaje_se_envio:'',
      errores:false,
      cargando:false,
      textos:{
                  ProbarEasy:'Para comenzar la prueba gratuita de 30 días',
                  ConsultarEasy:'Quiero hacer una consulta'
             }
    }
}, 

methods:{

enviarMensaje:function(){
  var data = this.data_mensaje;

  var url  = '/post_contacto_form';
  var vue  = this;

  this.cargando = true;

   axios.post(url,data).then(function (response){  
            var data = response.data;  
            

            if(data.Validacion == true)
            {  
               gtag('event', 'contacto');
               vue.se_envio = true; 
               vue.mensaje_se_envio = data.Validacion_mensaje; 
               $.notify(response.data.Validacion_mensaje, "success");
               vue.cargando = false;
            }
            else
            {
              $.notify(response.data.Validacion_mensaje, "error");
              vue.cargando = false;
              vue.errores = data.Errores;
            }
           
           }).catch(function (error){

                $.notify(error, "error");  
                vue.cargando = false;   
            
           });

}

},
computed:{
classImput:function(){
  return {
    'input-text-class-primary': this.color == 'input_color_primary',
    'input-text-class-white': this.color == 'input_color_white'
   }

  
},
classBoton:function(){
  return {
    'Boton-Fuente-Chica':true,
    'Boton-Primario-Relleno': this.color == 'input_color_primary',
    'Boton-Blanco': this.color == 'input_color_white',
    'Boton-Disable': !this.se_puede_enviar
   }
},
classTextColor:function(){
  return {
    
    'text-primary': this.color == 'input_color_primary',
    'text-white': this.color == 'input_color_white',
   }
},
classCargadorColor:function(){
  return {
    
   
    'cargador_white': this.color == 'input_color_white',
   }
},
se_puede_enviar:function(){
   if( this.data_mensaje.name != '' && this.data_mensaje.email != '' )
   {
     return true;
   }
   else
   {
    return false;
   } 
 },
 mostrar_si_se_contacta_por_easy_probar:function(){
  if(this.data_mensaje.tipo_consulta_de_easy == this.textos.ProbarEasy)
  {
    return true;
  }
},
mostrar_si_se_contacta_para_consultar_easy:function(){
  if(this.data_mensaje.tipo_consulta_de_easy == this.textos.ConsultarEasy)
  {
    return true;
  }
}   
}

});