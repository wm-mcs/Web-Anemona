<!DOCTYPE html>
<html lang="es">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    
    <title>@yield('titulo')</title>
    <meta name="Description" content="@yield('descripcion')">      
    <meta name="robots" content="@yield('robot')">
    <meta name="keywords" content="@yield('palabras_claves')">

    @yield('og-propiedades')

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/ecomerce_minimal.css') }}">    
    
  </head>
  <body>
  
  <div id="app" class="site-wrap">
    

   

      @yield('header-menu-iconos')

     
   



    @yield('imagen-grande-cabecera')


    @yield('contenido')

    

  
   


    <div class="site-blocks-cover inner-page py-5"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 ml-auto order-lg-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>New Denim Coat</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-lg-6 order-1 align-self-end">
            <img src="images/model_5.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            
            <div class="block-7" v-if="valor_se_puede_mostrar(Empresa.mision)">
              <h3 class="footer-heading mb-4">Sobre nosotros</h3>
              <p>@{{Empresa.mision}}</p>
            </div>
            <div class="block-7" >
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Accesos rápidos</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Pasta dental sin aluminio</a></li>
                 
                </ul>
              </div>
             
              
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Información de contacto</h3>
              <ul class="list-unstyled">
                <li v-if="valor_se_puede_mostrar(Empresa.direccion)" class="address">@{{Empresa.direccion}}</li>
                <li v-if="valor_se_puede_mostrar(Empresa.celular)" class="phone"><a :href="Empresa.link_whatsapp_send">@{{Empresa.celular}}</a></li>
                <li v-if="valor_se_puede_mostrar(Empresa.email)" class="email">@{{Empresa.email}}</li>
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
  </div>

  <script src="{{url()}}{{ elixir('js/ecomerceApp.js')}} " ></script> 

  @if(Auth::guest())
             <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
  @else
      @if(Auth::user()->role ==='adminMcos522')
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script> 
      @else
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
      @endif
  @endif
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>

  <script type="text/javascript">
    @yield('vue')  

  </script>
   
    
  </body>
</html>