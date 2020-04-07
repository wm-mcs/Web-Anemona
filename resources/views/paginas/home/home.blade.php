@extends('layouts.ecomerce_minimal.layout')

@section('titulo') {{$Empresa->name}} @stop

@section('descripcion') {{$Empresa->descripcion_empresa}} @stop

@section('robot') index, follow @stop

@section('palabras_claves') {{$Empresa->palabras_claves_empresa}} @stop





    


@section('og-propiedades') 

<meta property="og:url"                content="{{url()}}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="{{$Empresa->name}}" />
<meta property="og:description"        content="{{$Empresa->descripcion_empresa}}" />
<meta property="og:image"              content="{{$Empresa->img_logo_cuadrado}}" />
<meta property="og:image:secure_url"   content="{{$Empresa->img_logo_cuadrado}}" /> 
<meta property="og:image:width"        content="250">
<meta property="og:image:height"       content="250">
<meta property="og:image:alt"          content="{{ $Empresa->name}}" /> 




@stop  


@section('header-menu-iconos')  




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
      
      <categorias :Empresa="Empresa" :categorias="categorias"></categorias>
      <li><a href="shop.html">Shop</a></li> 
      <li><a href="#">Catalogs</a></li> 
      <li><a href="contact.html">Contact</a></li> 
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
              <a href="index.html" class="js-logo-clone"><img style="height:35px; " alt="{{$Empresa->name}}" :src="Empresa.img_logo_horizontal"></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                
                <categorias :Empresa="Empresa" :categorias="categorias"></categorias>
                
                <li><a href="shop.html">Shop</a></li>
                <li><a href="#">Catalogs</a></li>
                <li><a href="contact.html">Contact</a></li>
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

@stop



@section('imagen-grande-cabecera')
  <div class="site-blocks-cover portada-contiene-portada-general" data-aos="fade">
        <div class="container flex-row-center flex-justifice-space-around">

          <div class="row align-items-center get_width_100">
            <div class="portada-home-contiene-textos">
              <div class="">
                <h1 class="mb-2">Soluciones para tu gimnasio</h1>
                <h4>Lideres en Uruguay desde "1988"</h4>
                <div class="contiene-listado-de-opciones-portada">
                  <div class="contiene-item">
                    <span class="contiene-item-icono">
                      <i class="fas fa-circle"></i>
                    </span>
                    <div class="contiene-item-texto">
                      Asesoria
                    </div>
                  </div>
                   <div class="contiene-item">
                    <span class="contiene-item-icono">
                      <i class="fas fa-circle"></i>
                    </span>
                    <div class="contiene-item-texto">
                      
                      Venta de equipamientos
                    </div>
                  </div>
                  <div class="contiene-item">
                    <span class="contiene-item-icono">
                      <i class="fas fa-circle"></i>
                    </span>
                    <div class="contiene-item-texto">
                      Servicio de mantenimiento
                    </div>
                  </div>
                  
                </div>
                
                <p>
                  <a href="#" class="btn btn-outline-primary rounded-0 Boton-general-diseño">Porductos</a> 
                   <a href="#" class="btn btn-primary rounded-0 Boton-general-diseño">Servicios</a>
                 </p>
              </div>  
            </div>
            <div class="portada-home-contiene-imagen">
              <img src="imagenes/Portada/maquina.png" alt="Image" class="portada-home-imagen">
            </div>
            
          </div>
        </div>
        
  </div>
@stop



@section('contenido')

    <novededades :Empresa="Empresa"></novededades>
  
    
    <div class="site-blocks-cover inner-page py-5"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 ml-auto order-lg-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>Jacket</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-lg-8 order-1 align-self-end">
            <img src="images/model_woman_1.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

   <categoria-home-section :Empresa="Empresa" :Categorias="categorias"></categoria-home-section>
     
@stop 





@section('vue')

   @include('paginas.vue.categorias_home_section_individual_componente')
   @include('paginas.vue.categorias_home_section_componente')
   @include('paginas.vue.novedades_componente')
   @include('paginas.vue.categorias_componente')
   @include('paginas.vue.producto_lista_component')
   @include('paginas.vue.root')
@stop


