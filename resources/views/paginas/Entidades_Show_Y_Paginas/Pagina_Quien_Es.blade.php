@extends('layouts.ecomerce_minimal.layout')

@section('titulo') Sobre  {{$Empresa->name}} Uruguay @stop

@section('descripcion') Venta y servicio técnico en Uruguay de las principales marcas de equipamientos y accesorios para gimnasios. @stop

@section('robot') index, follow @stop

@section('palabras_claves') BeFitness, Be Fitness Uruguay @stop





    


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
 
@stop



@section('imagen-grande-cabecera')
  <div class="background_img
background_img_fixed img_quien  flex-row-center flex-justifice-space-around" data-aos="fade">
        <div class="container">

          <div class="row d-flex flex-column align-items-start p-4 mt-3 mt-lg-0 p-lg-0">
            <div class="col-12 col-lg-6 order-2 order-lg-1 ">
              <div class="">
               
                
                <h1 class="mb-5 titulos-class text-uppercase text-white">Somos Be Fitness </h1>
                 <div class="row col-6 mb-5">
                  <a href="{{url()}}">
                    <img src="{{$Empresa->img_logo_cuadrado}}" class="img-fluid">
                  </a> 
                </div>
                <p class="parrafo-class text-white text-bold mb-5">
                 Lideres en equipar y mantener gimnasios.
                </p>                
               
                
                
                                
              </div> 
              
            </div>
            
             
            
            
          </div>
        </div>
        
  </div>
@stop



@section('contenido')

           
             
  <div class="site-section background-gris-1">
    <div class="container">
      <h2 class="mb-4 sub-titulos-class text-center text-color-primary text-bold">
        HAS LLEGADO HASTA AQUÍ POR ALGO.
      </h2>
      <h3 class="sub-titulos-class text-center text-color-primary mb-4">
        Necesitas tener los equipos de tu gimnasio en condiciones.
      </h3>    

      <p class="text-center text-color-primary m-0">        
       Somo expertos en materia de equipamiento para gimasios. <span class="text-bold" >Venta</span>. <span class="text-bold" >Servicios de mantenimiento</span>.
      </p>   
      
    </div>
  </div>

            

<div  class="site-section background-gris-0" id="">
      <div class="container d-flex flex-column align-items-center">

        <div class=" p-4 mb-4 col-6 col-md-4 col-lg-3 d-flex flex-column align-items-center">
          <img class="img-fluid" data-src="{{$Empresa->img_logo_cuadrado}}">
        </div>
          
        
        <div class="col-12 p-4 border border-primary mb-3 ">
          <p class="parrafo-class mb-2">            
            Be Fitness es una empresa Uruguaya dedicada al mantenimiento y venta de maquinas de Fitness.  Es reprensentante de la marca SportsArt para Uruguay y es servicio técnico oficial de:        
          </p>
          <ul class="mb-2 pl-4">
             <div class="contiene-item">Cybex y Movement en Uruguay</div>
             <div class="contiene-item">Súper Hábil</div>
             <div class="contiene-item">Los equipos de Cardio y Musculación de Embreex ( Alsi ltda )</div>
             <div class="contiene-item">Los equipos de la marca BH representante ( Deceleste )</div>             
          </ul>

          <p class="parrafo-class mb-2">            
            Nuestros clientes abarcan un gran abanico que va desde <span class="text-bold"> hogares hasta clientes corporativos tales como Clubes, Gimnasios, Hoteles, Spa, Centro de Estéticas, Complejos Deportivos</span>, entre otros.
          </p>  
          <p class="parrafo-class mb-2">
            Integran nuestro staff técnicos altamente capacitados y con más de 10 años de experiencia en el área lo que nos permite, punto en el que ponemos especial esmero en dar, una <span class="text-bold"> respuesta rápida y una solución eficiente</span>.
          </p>
          

          
        </div>
        
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