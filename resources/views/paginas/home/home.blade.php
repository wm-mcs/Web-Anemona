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

     @include('paginas.home.BeFitnessServicios')
     @include('paginas.home.BeFitnessClientes')
     
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


