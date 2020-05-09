<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-logo">
       <a href="index.html" class="js-logo-clone">
        <img alt="A &amp; N" :src="Empresa.img_logo_horizontal" style="height: 35px;">
       </a>
    </div>
    <div class="site-mobile-menu-close ">
       <span class="ion-ios-close js-menu-toggle"></span>
    </div>
  </div>

  <div class="site-mobile-menu-body">
  <ul class="site-nav-wrap">
      
      <categorias :Empresa="Empresa" :categorias="categorias" ></categorias>   
      <marcas-nav v-if="marcas.length" v-for="marca in marcas" :marca="marca"></marcas-nav>    
      <li><a href="contact.html">Contacto</a></li> 
       <li class="has-children">
        <span class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem1"></span>
        <a href="contact.html"><span class="icon-user"></span></a> 

        <ul class="collapse" id="collapseItem1">
         <li><a href="#">Mi cuenta</a></li> 
         <li><a href="http://web-anemona.worldmaster.com.uy/salir">Salir</a></li>
        </ul>
      </li>
  </ul>
  </div>
</div>
 <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>
     <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="{{route('get_home')}}" class="js-logo-clone"><img style="height:35px; " alt="{{$Empresa->name}}" :src="Empresa.img_logo_horizontal"></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                
                <categorias :Empresa="Empresa" :categorias="categorias" ></categorias>
                <marcas-nav v-if="marcas.length" v-for="marca in marcas" :marca="marca"></marcas-nav>    

                <li><a href="contact.html">Contacto</a></li>
                <li class="has-children"><a href="contact.html"><span class="icon-user"></span></a>
                  <ul class="dropdown">

                  @if(Auth::guest())  
                  <li><a href="{{route('auth_login_get')}}">Iniciar</a></li>

                  @else
                   <li><a href="#">Mi cuenta</a></li>
                   <li><a href="{{route('logout')}}">Salir</a></li>
                  @endif
                  
                
                 </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div class="icons">
           {{--   <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>

           

            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a> --}}
            <img src="{{url()}}/imagenes/Pais/bandera-de-uruguay.jpg" class="icono-de-uruguay">
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
</div>

<div class="Genera-margin-para-para-ajustar-contenido-con-elementos-fixed-en"></div>
