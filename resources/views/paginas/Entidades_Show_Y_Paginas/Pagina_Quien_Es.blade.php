@extends('layouts.ecomerce_minimal.layout')

@section('titulo') {{$Portada->titulo_de_la_pagina}} @stop

@section('descripcion') {{$Portada->description_de_la_pagina}} @stop

@section('robot') index, follow @stop

@section('palabras_claves') BeFitness, Be Fitness Uruguay @stop



@section('logo-imagenes')

<img v-show="$root.scrolled" :data-src="$root.Empresa.img_logo_horizontal" class="img-fluid p-3" >
<img v-show="!$root.scrolled" :data-src="$root.Empresa.img_logo_horizontal_blanco"  class="img-fluid p-3">

@stop

    


@section('og-propiedades') 

<meta property="og:url"                content="{{url()}}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="Contáctate ahora con {{$Empresa->name}} Uruguay" />
<meta property="og:description"        content="{{$Empresa->descripcion_empresa}}" />
<meta property="og:image"              content="{{$Empresa->img_logo_cuadrado}}" />
<meta property="og:image:secure_url"   content="{{$Empresa->img_logo_cuadrado}}" /> 
<meta property="og:image:width"        content="250">
<meta property="og:image:height"       content="250">
<meta property="og:image:alt"          content="{{ $Empresa->name}}" /> 




@stop  


@section('header-menu-iconos') 
 @include('paginas.Entidades_Show_Y_Paginas.header.header_completo')
@stop



@section('imagen-grande-cabecera')
  {{--*/  $Portada   =  $Portada /*--}}
  {{--*/  $Route     = '' /*--}}
  {{--*/ $EsPortada  = true /*--}}
  @include('paginas.portadas.partials.portada_molde')
@stop



@section('contenido')

           
  <span id="intro"></span>             
  <div class="site-section background-gris-1">
    <div class="container">
      <h2 class="mb-4 sub-titulos-class text-center text-color-primary text-bold">
        HAS LLEGADO HASTA AQUÍ POR ALGO.
      </h2>
      <h3 class="sub-titulos-class text-center text-color-primary mb-4">
        Necesitas tener los equipos de tu gimnasio en condiciones.
      </h3>    

      <p class="text-center text-color-primary m-0">        
       Somos expertos en materia de equipamiento para gimnasios. <span class="text-bold" >Venta</span>. <span class="text-bold" >Servicios de mantenimiento</span>.
      </p>   
      
    </div>
  </div>

            

<div  class="site-section background-gris-00" id="">
      <div class="container d-flex flex-column align-items-center">

        <div class=" p-4 mb-4 col-6 col-md-4 col-lg-3 d-flex flex-column align-items-center">
          <img class="img-fluid" data-src="{{$Empresa->img_logo_cuadrado}}">
        </div>
          
        
        <div class="col-12 p-4 border border-primary mb-3 ">
          <p class="parrafo-class mb-4"> 
            En Be Fitness brindamos soluciones en implementación y mantenimiento de máquinas de gimnasio. Somos distribuidores exclusivos en Uruguay de SportsArt, marca lider en equipos de alto desempeño en entrenamiento físico y deportivo. Estamos preparados a las exigencias de nuestros clientes.    
          </p>

          <p class="parrafo-class mb-4"> 
            Nuestro plus ...   
          </p>
          <ul class="mb-4 pl-4">
             <div class="contiene-item"> 
               <b>Mantenimiento preventivo y correctivo</b>: nuestros paquetes de mantenimiento aseguran que puedas sacar la mejor rentabilidad de cada máquina por el mayor tiempo posible. 
             </div>
             <div class="contiene-item">
              <b>Asesoría personalizada</b>: si tienes un espacio que quieres implementar y no sabes por dónde empezar, te asesoramos en el paso a paso, desde qué máquinas adquirir, hasta como acondicionar cada ambiente.
             </div>
             <div class="contiene-item">
              <b>Implementación de equipos</b>: el equipo que buscas, lo tenemos. Las mejores marcas con acabados premium, funcionalidades de calidad y prestigio internacional. 
             </div>
             <div class="contiene-item"><b>Post-Venta</b>: poseemos un servicio técnico propio y nuestros técnicos se especializan permanentemente con nuestros proveedores oficiales. Mantenemos stock de repuestos originales, que permite dar soluciones oportunas, con tiempos de respuesta menores a 48 horas y con cobertura en todo el territorio nacional.</div>             
          </ul>

          <p class="parrafo-class mb-4">            
            Nuestros clientes abarcan un gran abanico que va desde <span class="text-bold"> hogares hasta clientes corporativos tales como Clubes, Gimnasios, Hoteles, Spa, Centro de Estéticas, Complejos Deportivos</span>, entre otros.
          </p>  
          <p class="parrafo-class mb-4">
            Integran nuestro staff técnicos altamente capacitados y con más de 10 años de experiencia en el área lo que nos permite, punto en el que ponemos especial esmero en dar, una <span class="text-bold"> respuesta rápida y una solución eficiente</span>.
          </p>
          

          
        </div>

        <a class="Boton-Fuente-Chica
Boton-Primario-Sin-Relleno my-4" href="{{route('getServicios')}}"> Explorá los servicios de mantenimiento que tenemos para tu gimnasios <i class="fas fa-angle-double-right"></i></a>
        
      </div>
    </div>
    


   
@include('paginas.home.BeFitnessClientes')
    
@include('paginas.home.BeFitnessMarcas')         
       
   
     
@stop 


  @section('footer')
   @include('paginas.home.home_footer')
  @stop
@section('vue')

  @include('paginas.vue.header-component')
   @include('paginas.vue.contacto-component')
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