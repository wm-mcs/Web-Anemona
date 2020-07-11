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
 @include('paginas.home.home_nav_general')
@stop



@section('imagen-grande-cabecera')
  <div class="site-blocks-cover portada-contiene-portada-general flex-row-center flex-justifice-space-around" >
        <div class="container">

          <div class="row align-items-center p-4 mt-3 mt-lg-0 p-lg-0">
            <div class="col-12 col-lg-6">
              <div class="">
                <h1 class="mb-2 titulos-class text-uppercase text-color-black">Soluciones integrales en fitness</h1>
                <h4 class="color-text-gris">Líderes en mantenimientos programados desde 2010</h4>
                <div class="contiene-listado-de-opciones-portada">
                  <div class="contiene-item">
                      Asesoría en armado de salas en 3D y renovaciones
                  </div>
                   <div class="contiene-item">
                     Venta de equipos comerciales, hogar e instalaciones
                  </div>
                  <div class="contiene-item">
                      Servicio de mantenimiento y service
                  </div>  
                  <div class="contiene-item">
                      Servicio de alquiler de equipos
                  </div>                 
                </div>
                
                 <div class="row">
                    <div class="col-lg-6 p-1">
                      <a href="#" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chica">Productos</a> 
                    </div>
                    <div class="col-lg-6 p-1 ">
                       <a href="#Servicios" class="Boton-Primario-Relleno Boton-Fuente-Chica">Servicios</a>
                    </div>                    
                 </div>                 
              </div> 
              
            </div>
            <div class="d-none d-lg-block  col-lg-6 ">
                <img data-src="imagenes/Portada/maquina.png" alt="Image" class="portada-home-imagen">
            </div> 
            
            
          </div>
        </div>
        
  </div>
@stop



@section('contenido')


     @include('paginas.home.BeFitnessMarcaDestacada')

     <novededades :empresa="Empresa"></novededades>
     <categoria-home-section :empresa="Empresa" :categorias="Categorias"></categoria-home-section>
     <marcas-home 
                  :titulo="Nombres_secciones_marcas.titulo_marcas_distribuimos"
                  :marcas="Marcas">
       
     </marcas-home>

  
    


   

     <div v-if="scrolled" class="background_img background_img_fixed somos-background Padding-de-secciones" id="Servicios">
      <div class="container  mb-4">
          <div class="col-lg-10">
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
            <div class="mt-3 col-10 col-lg-6">
              <a href="{{route('getServicios')}}" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chica">Explorar nuestros servicios <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
        </div>

        <div class="container ">
          <div class="col-lg-10">
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
            <div class="mt-3 col-10 col-lg-6">
              <a href="{{route('getContacto')}}" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chica">Coordinar una visita gratuita <i class="fas fa-angle-double-right"></i></a>
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


  @section('footer')
   @include('paginas.home.home_footer')
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


