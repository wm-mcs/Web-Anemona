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
  <div class="site-blocks-cover portada-contiene-portada-general" data-aos="fade">
        <div class="container flex-row-center flex-justifice-space-around">

          <div class="row align-items-center">
            <div class="col-11 col-lg-8">
              <div class="">
                <h1 class="mb-2 titulos-class text-uppercase color-text-white">Soluciones para tu gimnasio</h1>
                <h4 class="color-text-white">Líderes en Uruguay desde 2007</h4>
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
                
                 <div class="row">
                    <div class="col-lg-6 p-3">
                      <a href="#" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chica">Productos</a> 
                    </div>
                    <div class="col-lg-6 p-3 mt-3 mt-lg-0">
                       <a href="#Servicios" class="Boton-Primario-Relleno Boton-Fuente-Chica">Servicios</a>
                    </div>                    
                 </div>
                  
                  
                 
                 </div>
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
            <div class="mt-3 col-10 col-lg-6">
              <a href="#" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chica">Mas información</a>
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
            <div class="mt-3 col-10 col-lg-6">
              <a href="#" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chica">Coordinar una visita</a>
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


