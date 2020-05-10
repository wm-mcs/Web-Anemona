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
                  <li><a href="#">Servicios</a></li>
                 
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