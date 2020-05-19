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
  {{-- <div class="site-blocks-cover portada-contiene-portada-general flex-row-center flex-justifice-space-around" data-aos="fade">
        <div class="container">

          <div class="row d-flex flex-column align-items-start p-4 mt-3 mt-lg-0 p-lg-0">
            <div class="col-12 col-lg-6 order-2 order-lg-1 ">
              <div class="">
                <h1 class="mb-2 titulos-class text-uppercase text-color-black">{{ $Categoria->name_arreglado}} </h1>
                <h4 class="color-text-gris">
                 Los mejores productos de {{ $Categoria->name_arreglado}}
                </h4>
                
                <div class="contiene-listado-de-opciones-portada">
                  <div class="contiene-item">
                     Al mejor precio en Uruguay 
                  </div>
                   <div class="contiene-item">
                     Todo con soporte técnico
                  </div>
                  <div class="contiene-item">
                     Garantía oficial
                  </div>
                                    
                </div>
                <div class="row">
                    <div class="col-lg-12 p-1">
                      <a href="#catalogo" class="Boton-Primario-Relleno Boton-Fuente-Chica">Ver catálogo de {{ $Categoria->name_arreglado}} </a> 
                    </div>
                                      
                 </div> 
                
                                
              </div> 
              
            </div>
            
             
            
            
          </div>
        </div>
        
  </div> --}}
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