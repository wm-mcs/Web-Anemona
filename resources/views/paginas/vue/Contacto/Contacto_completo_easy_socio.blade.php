

<div v-if="!se_envio" class="container">

  <div class="row" id="formulario_contacto">
    <div class="col-12 mb-5 position-relative">
      <h2 class="section-title  mb-5" :class="classTextColor">Contacto</h2>
    </div>
  </div>
 
  <div action="#" class="form">
    <div class="row mb-4">
      
      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.name" type="text" :class="classImput" placeholder="Nombre">
      </div>

      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.email" type="email" :class="classImput" placeholder="Email ">
      </div>
    </div>

     <div class="row mb-4">
      <div class="form-group col-12">
      <input v-model="data_mensaje.pais" type="text" :class="classImput" placeholder="¿De dónde eres? (País) ">
        
      </div>
    </div>

   

   
   
   

    <div class="row mb-4 justify-content-end">
      <p class="col-12 text-bold -text-primary mb-4">¿Por qué quieres hablar con nosotros?</p>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="radio" name="" :value="textos.ProbarEasy" v-model="data_mensaje.tipo_consulta_de_easy">
        <p class="color-text-gris m-0">@{{textos.ProbarEasy}}</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="radio" name="" :value="textos.ConsultarEasy" v-model="data_mensaje.tipo_consulta_de_easy">
        <p class="color-text-gris m-0">@{{textos.ConsultarEasy}}</p>
      </div>
         
    </div>

    <div v-if="mostrar_si_se_contacta_por_easy_probar" action="#" class="form">
    <div class="row mb-4">
      
      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.celular" type="text" :class="classImput" placeholder="¿Cuál es tu celular?">
      </div>

      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.nombre_empresa" type="email" :class="classImput" placeholder="¿Cómo se llama tu negocio?">
      </div>
    </div>

     
    </div>

 



  

     <div v-if="mostrar_si_se_contacta_para_consultar_easy" class="row mb-4">
      <div class="form-group col-12">
        <textarea v-model="data_mensaje.mensaje" class="border-primary" cols="30" rows="4" :class="classImput" placeholder="Explica de manera detallada qué necesitas"></textarea>
      </div>
    </div>








    <div class="row">

      <div class="col-md-6" v-if="errores" >
        <div :class="classTextColor" v-for="error in errores">@{{error}}</div>
      </div>

      <div class="col-md-12">
        <div v-if="cargando" class="flex-column align-items-center">
          <div class="cssload-tube-tunnel" :class="classCargadorColor"></div>
        </div>
        <div v-else v-on:click="enviarMensaje" :class="classBoton" value="Enviar mensaje">
          Enviar solicitud ahora
        </div>
      </div> 
      <div>
       
      </div>  

    </div>
    <div class="row align-items-center justify-content-center mb-4 mt-4">
      <div class="row  align-items-center justify-content-center">


         <div class="col-12 text-center parrafo-class p-3 mb-1 color-text-gris" >
          {{$Empresa->texto_tiempo_respuesta_contacto}}
         </div>
       
         <img class="rounded-circle   imagen-contacto-chiac-al-lado-de-te-responderemos" src="{{url()}}/imagenes/Contacto/mauricio-costanzo-atención-comercial-por-desarrollo-páginas-web-software.jpg" alt="Image">
         
      </div>
      
    </div>
    
  </div>
</div>
<div v-else class="section-title text-center mb-5" :class="classTextColor">
  <h2 class="section-title text-center mb-5" :class="classTextColor" >@{{mensaje_se_envio}}</h2>
</div>