<div v-if="!se_envio" class="container">
  <div class="row" id="formulario_contacto">
    <div class="col-12 mb-5 position-relative">
      <h2 class="section-title text-center  mb-5" :class="classTextColor">Formulario de contacto</h2>
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
        <textarea v-model="data_mensaje.mensaje" cols="30" rows="4" :class="classImput" placeholder="Mensaje"></textarea>
      </div>
    </div>

   <div class="row">

      <div class="col-12 mb-3" v-if="errores" >
        <div class="w-100 p-3 background-gris-00">
           <div :class="classTextColor" v-for="error in errores">@{{error}}</div>
        </div>
       
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
          Responderemos rápido
         </div>
       
         
      </div>
      
    </div>
    
  </div>
</div>
<div v-else class="section-title text-center mb-5" :class="classTextColor">
  <h2 class="section-title text-center mb-5" :class="classTextColor" >@{{mensaje_se_envio}}</h2>
</div>




