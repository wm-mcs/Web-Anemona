@extends('layouts.ecomerce_minimal.layout')

@section('titulo') Contáctate ahora con {{$Empresa->name}} Uruguay @stop

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
background_img_fixed img_contacto  flex-row-center flex-justifice-space-around" data-aos="fade">
        <div class="container">

          <div class="row d-flex flex-column align-items-start p-4 mt-3 mt-lg-0 p-lg-0">
            <div class="col-12 col-lg-6 order-2 order-lg-1 ">
              <div class="">
                <div class="col-10 mb-4">
                  <img src="{{$Empresa->img_logo_cuadrado}}" class="img-fluid">
                </div>
                
                <h1 class="mb-3 titulos-class text-uppercase text-white">Contactate ahora </h1>
                <h2 class="sub-titulos-class text-white mb-3">
                 Para pedir información de nuestro serviciós de mantenimiento para tu gimansio llenar el formulario de aquí abajo o usar cualquier otra vía de contacto que están abajo.
                </h2>
                
               
                <div class="row">
                    <div class="col-lg-12 p-1">
                      <a href="#catalogo" class="Boton-Primario-Relleno Boton-Fuente-Chica">
                        Contactar ahora para pedir información <i class="fas fa-angle-double-right"></i>
                      </a> 
                    </div>
                                      
                 </div> 
                
                                
              </div> 
              
            </div>
            
             
            
            
          </div>
        </div>
        
  </div>
@stop



@section('contenido')

    

 
    


   

    
         
       
   
     
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