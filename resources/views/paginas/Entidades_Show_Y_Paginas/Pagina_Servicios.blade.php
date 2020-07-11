@extends('layouts.ecomerce_minimal.layout')

@section('titulo') Servicio de {{$Empresa->name}} Uruguay @stop

@section('descripcion') Servicios de mantenimiento mensulaes para gimnasios en Uruguay. @stop

@section('robot') index, follow @stop

@section('palabras_claves') BeFitness, Be Fitness Uruguay @stop





    


@section('og-propiedades') 

<meta property="og:url"                content="{{url()}}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="Servicio de {{$Empresa->name}} Uruguay" />
<meta property="og:description"        content="Servicios de mantenimiento mensulaes para gimnasios en Uruguay" />
<meta property="og:image"              content="{{$Empresa->img_logo_cuadrado}}" />
<meta property="og:image:secure_url"   content="{{$Empresa->img_logo_cuadrado}}" /> 
<meta property="og:image:width"        content="250">
<meta property="og:image:height"       content="250">
<meta property="og:image:alt"          content="{{ $Empresa->name}}" /> 




@stop  


@section('header-menu-iconos') 
 
@stop



@section('imagen-grande-cabecera')
<div class="background_img
background_img_fixed img_servicios ">

<div class="background-layer-layoute-opasity  d-flex flex-row justify-content-center align-items-center">
  


        <div class="container">

          <div class="row d-flex flex-column align-items-start p-4 mt-3 mt-lg-0 p-lg-0">
            <div class="col-12 col-lg-6 order-2 order-lg-1 ">
              <div class="">
               
                
                <h1 class="mb-5 titulos-class text-uppercase text-white">Planes de mantenimiento para de tu gimnasio </h1>
                 <div class="row col-6 mb-5">
                  <a href="{{url()}}">
                    <img src="{{$Empresa->img_logo_cuadrado}}" class="img-fluid">
                  </a> 
                </div>
                <p class="parrafo-class text-white text-bold mb-5">
                 Planes 
                </p>                
               
                
                
                                
              </div> 
              
            </div>
            
             
            
            
          </div>
        </div>
</div>        
</div>
@stop



@section('contenido')

           
             
  <div class="site-section ">
    <div class="container">
      <h2 class="mb-4 sub-titulos-class text-center text-color-primary text-bold">
        Si estás aquí es probable que estás necesitando ayuda con el mantenimeinto de las maquinas de tu gimnasio.
      </h2>
      <h3 class="sub-titulos-class text-center text-color-primary mb-4">
        Dejá de perder tiempo y mirá ahora los planes que tenemos para tí  <i class="fas fa-hand-point-down"></i>
      </h3>    

      <p class="text-center text-color-primary m-0">        
       Somos expertos en <span class="text-bold" >mantener gimnasios</span>.
      </p>   
      
    </div>
  </div>

            

<div  class="site-section background-gris-0" id="">
      <div class="container d-flex flex-column align-items-center">

        <div class=" p-4 mb-4 col-6 col-md-4 col-lg-3 d-flex flex-column align-items-center">
          <img class="img-fluid mb-2" data-src="{{$Empresa->img_logo_cuadrado}}">
          <p class="text-center">Servicios</p>
        </div>

        <div class="row align-items-center ">
           <div class="col-lg-6 order-2 order-lg-2 flex-column p-4">          
              
            <h3 class="sub-titulos-class text-bold mb-3">Planes de mantenimiento</h3>
            
            <ul class="mb-4 pl-4">
             
              <p class="contiene-item"> 
                <span class="text-bold">Mantenimiento Correctivo:</span>
                Se opta a este servicio a partir del pago de un abono mensual con derecho a prestaciones pre establecidas para realizar solamente tareas de carácter correctivas.  
              </p>
              
            
              <p class="contiene-item"> 
                <span class="text-bold">Mantenimiento Predictivo y Correctivo:</span>
                De común acuerdo con el Cliente, se establecen visitas periódicas a las instalaciones con una frecuencia programada. Se resuelven las incidencias detectadas (mantenimiento correctivo) y se previenen las futuras anomalías (mantenimiento preventivo). 
              </p>

             
              <p class="contiene-item"> 
                <span class="text-bold">PLUS:</span>
                Respuesta inmediata. Teniendo contratado nuestro servicio de urgencias PLUS tendrá a su alcance una respuesta al instante para solucionar CUALQUIER  inconveniente grave que se le presente durante las 24 horas del día los 365 días del año.
                Recibirá asesoramiento telefónico en el momento en el que ocurra la incidencia, con asistencia al lugar por parte de operarios calificados en menos de 2 horas. 
              </p>
                        
           </ul>                
            
            
           
                
             
           </div>
           <div class="col-lg-6 order-3 pl-lg-5 order-lg-1">
            <img class="img-fluid mb-4" src="{{url()}}/imagenes/Home/laura_jodral_es.jpg" alt="Laura Jodral">
           </div>
          </div>
            
          
        
        

        <a class="Boton-Fuente-Chica
Boton-Primario-Sin-Relleno my-4" href="{{route('getContacto')}}"> Coordiná ahora mismo una visita gratuita a tu gimnasio  <i class="fas fa-angle-double-right"></i></a>
        
      </div>
    </div>
    


   

    
         
       
   
     
@stop 


  @section('footer')
   @include('paginas.home.home_footer')
  @stop
@section('vue')


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