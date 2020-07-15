 <div v-if="scrolled" class="background_img background_img_fixed somos-background Padding-de-secciones" id="Servicios">
      <div class="container  mb-4">
          <div class="col-lg-6">
           <h2 class="titulos-class color-text-white text-uppercase">Mantenimiento</h2>
           <div class="contiene-listado-de-opciones-portada">
                  <div class="contiene-item">
                     <span class="text-bold">Mantenimiento predictivo</span>: se establecen visitas periódicas con una frecuencia programada 
                  </div>
                  <div class="contiene-item">
                      <span class="text-bold">Mantenimiento correctivo</span>: se establecen una cantidad de visitas mensuales las cuales podrás usar según tu necesidad
                  </div>
                   <div class="contiene-item">
                     <span class="text-bold">Atención a urgencias</span>: con respuesta telefónica inmediata y presencia en el sitio en un máximo de 2 horas
                  </div>
            </div>
            <div class="mt-3 col-10 col-lg-12">
              <a href="{{route('getServicios')}}" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chica">Explorar nuestros servicios <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
        </div>

        <div class="container ">
          <div class="col-lg-6">
           <h2 class="titulos-class color-text-white text-uppercase">Somos lideres</h2>
           <div class="contiene-listado-de-opciones-portada">
                  <div class="contiene-item">
                     <span class="text-bold">Servicio oficial de</span>: Cybex y Movement, Súper Hábil, Los equipos de Cardio y Musculación de Embreex (Alsi ltda), Los equipos de la marca BH representante (Deceleste)
                  </div>
                  <div class="contiene-item">
                      <span class="text-bold">El 70% del mercado uruguayo trabaja con nosotros</span>
                  </div>
                   <div class="contiene-item">
                     <span class="text-bold">Contamos con los mejores proveedores</span>: podremos conseguir cualquier respuesto para el service de tu equipamiento sea la marca que sea
                  </div>
            </div>
            <div class="mt-3 col-10 col-lg-12">
              <a href="{{route('getContacto')}}" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chica">Coordinar una visita gratuita <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
       
        </div>
       
    </div> 
    <div v-if="scrolled"  class="background-gris-1 py-5"> 
      <div class="container py-lg-4">
        <div class="row align-items-center justify-content-center">
        {{-- S e r v i c i o --}}        
          <div class="col-6 col-lg-4 text-center mb-3 mb-lg-0 p-4 p-lg-2">
            <div class="titulos-class mb-4 text-color-primary"><i class="fas fa-tools"></i></div>
            <h3 class="sub-titulos-class mb-2 text-uppercase "><b> Servicio técnico</b></h3>
            <p class="parrafo-class color-text-gris">Nuestra empresa cuenta con servicio técnico altamente especializado, tanto en la instalación como en la reparación de todos nuestro productos.</p>
          </div>
        
        {{-- C o b e r t u r a --}}        
          <div class="col-6 col-lg-4 text-center mb-3 mb-lg-0 p-4 p-lg-2">
            <div class="titulos-class mb-4 text-color-primary"><i class="fas fa-flag"></i></div>
            <h3 class="sub-titulos-class mb-2 text-uppercase "><b> Cobertura nacional</b></h3>
            <p class="parrafo-class color-text-gris">Contamos con cobertura a nivel nacional y respondiendo con gran rapidez frente a cualquier inquietud y/o necesidad que tengan nuestros clientes.</p>
          </div>
        
        {{-- S e r v i c i o --}}       
          <div class="col-6 col-lg-4 text-center mb-3 mb-lg-0 p-4 p-lg-2">
            <div class="titulos-class mb-4 text-color-primary"><i class="far fa-check-square"></i></div>
            <h3 class="sub-titulos-class mb-2 text-uppercase"><b> Profesionalismo</b></h3>
            <p class="parrafo-class color-text-gris">Nos distinguimos, por nuestra eficiencia, profesionalismo y <b>rapidez de respuesta</b>, como por nuestro amplio stock de repuestos originales.</p>
          </div>

        </div>      
      </div>
    </div>