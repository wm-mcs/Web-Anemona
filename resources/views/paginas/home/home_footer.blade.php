  <div class="p-5 background-gris-2">
    <div class="container">
      <div class="row justify-content-center">
        <a class="Boton-Fuente-Chica Boton-Primario-Sin-Relleno my-4" :href="Empresa.link_whatsapp_send">
  
  <i class="fab fa-whatsapp"></i> Comenzar chat por Whatsapp para coordinar visita o por más información sobre nuestros productos y servicios <i class="fas fa-angle-double-right"></i>
</a>
      </div>
    </div>

  </div>  

 <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            
            <div class="block-7" v-if="valor_se_puede_mostrar(Empresa.mision)">
              <h3 class="footer-heading mb-4">Sobre nosotros</h3>
              <p class="color-text-gris">@{{Empresa.mision}}</p>
            </div>
            
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Accesos rápidos</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="{{route('getQuienes')}}">Sobre Be Fitness</a></li>
                  <li><a href="{{route('getServicios')}}">Servicios</a></li>
                  <li><a href="{{route('getContacto')}}">Contacto</a></li>
                   @if(Auth::guest())
                    <li><a href="{{route('auth_login_get')}}">Iniciar sesión</a></li>                   
                   @else
                    <li><a href="{{route('get_datos_corporativos')}}">Administrar</a></li>   
                    <li><a href="{{route('logout')}}">Salir</a></li>                    
                   @endif
                </ul>
              </div>
             
              
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Información de contacto</h3>
              <ul class="list-unstyled">
                <li v-if="valor_se_puede_mostrar(Empresa.direccion)" class="address color-text-gris">@{{Empresa.direccion}}</li>
                <li v-if="valor_se_puede_mostrar(Empresa.celular)" class="phone color-text-gris"><a :href="Empresa.link_whatsapp_send">@{{Empresa.celular}}</a></li>
                <li v-if="valor_se_puede_mostrar(Empresa.email)" class="email color-text-gris">@{{Empresa.email}}</li>
              </ul>
            </div>

            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            {{-- <p>
            
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            
            </p> --}}
          </div>
          
        </div>
      </div>
    </footer>
    @include('paginas.home.footer_credits')