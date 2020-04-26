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
                <marcas-nav :marcas="marcas"></marcas-nav> 
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

@stop



@section('imagen-grande-cabecera')
  <div class="site-blocks-cover portada-contiene-portada-general" data-aos="fade">
        <div class="container flex-row-center flex-justifice-space-around">

          <div class="row align-items-center get_width_100">
            <div class="portada-home-contiene-textos">
              <div class="">
                <h1 class="mb-2 secciones-personalizada-h1">Soluciones para tu gimnasio</h1>
                <h4>Líderes en Uruguay desde 2007</h4>
                <div class="contiene-listado-de-opciones-portada">
                  <div class="contiene-item">
                      Asesoría
                  </div>
                   <div class="contiene-item">
                     Venta de equipamientos
                  </div>
                  <div class="contiene-item">
                      Servicio de mantenimiento
                  </div>
                  
                </div>
                
                <p>
                  <a href="#" class="btn btn-outline-primary rounded-0 Boton-general-diseño">Productos</a> 
                   <a href="#Servicios" class="btn btn-primary rounded-0 Boton-general-diseño">Servicios</a>
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
     <categoria-home-section :Empresa="Empresa" :Categorias="categorias"></categoria-home-section>
     <marcas-home :Empresa="Empresa" 
                  :Titulo="Nombres_secciones_marcas.titulo_marcas_distribuimos"
                  :Marcas="marcas">
       
     </marcas-home>

  {{--   <div class="seccion-servicios-home servicios-background Padding-de-secciones" id="Servicios">

        

         

         <div class="contenedor-logo-absolut ">
           <div class="container flex-row-column-start">
              <img class="logo-easy-socio-portada" :src="Empresa.img_logo_horizontal_blanco" alt="BeFitness Uruguay Logo en blanco.">
           </div>
         </div>
         
       
    </div>  --}}
  
    


  

     <div class="seccion-servicios-home somos-background Padding-de-secciones" id="Servicios">
      <div class="container flex-row-column flex-justifice-space-around">
          <div class="Secciones-contenedor-texto align-self-md-start">
           <h2 class="secciones-personalizada-h2 color-text-white text-uppercase">Servicios de mantenimiento</h2>
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
            <div class="mt-3">
              <a href="#" class="btn btn-outline-primary Boton-general-diseño">Mas información</a>
            </div>
         </div>
        </div>

        <div class="container flex-row-column flex-justifice-space-around">
          <div class="Secciones-contenedor-texto align-self-md-start">
           <h2 class="secciones-personalizada-h2 color-text-white text-uppercase">Somos lideres</h2>
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
            <div class="mt-3">
              <a href="#" class="btn btn-outline-primary Boton-general-diseño">Coordinar una visita</a>
            </div>
         </div>
       
        </div>

         

        {{--  <div class="contenedor-logo-absolut ">
           <div class="container flex-row-column-end">
              <img class="logo-easy-socio-portada" :src="Empresa.img_logo_horizontal_blanco" alt="BeFitness Uruguay Logo en blanco.">
           </div>
         </div> --}}
         
       
    </div> 
     
@stop 





@section('vue')


   @include('paginas.vue.marcas_nav')
   @include('paginas.vue.marca-lista')
   @include('paginas.vue.marcas_home')
   @include('paginas.vue.categorias_home_section_individual_componente')
   @include('paginas.vue.categorias_home_section_componente')
   @include('paginas.vue.novedades_componente')
   @include('paginas.vue.categorias_componente')
   @include('paginas.vue.producto_lista_component')
   @include('paginas.vue.root')
@stop


