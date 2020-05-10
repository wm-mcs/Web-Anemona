@extends('layouts.ecomerce_minimal.layout')

@section('titulo') {{$Marca->name}} @stop

@section('descripcion')  @stop

@section('robot') index, follow @stop

@section('palabras_claves') @stop





    


@section('og-propiedades') 

<meta property="og:url"                content="{{url()}}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="{{$Marca->name}}" />
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
  <div class="site-blocks-cover portada-contiene-portada-general flex-row-center flex-justifice-space-around" data-aos="fade">
        <div class="container">

          <div class="row d-flex flex-row align-items-center p-4 mt-3 mt-lg-0 p-lg-0">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
              <div class="">
                <h1 class="mb-2 titulos-class text-uppercase text-color-black">Lo mejor de {{ $Marca->name_arreglado}} </h1>
                <h4 class="color-text-gris">
                 Somos distribuidores oficiales en Uruguay
                </h4>
                
                <div class="contiene-listado-de-opciones-portada">
                  <div class="contiene-item">
                     Venta de equipamientos 
                  </div>
                   <div class="contiene-item">
                     Servicio técnico oficial
                  </div>
                                    
                </div>
                
                 <div class="row">
                    <div class="col-lg-6 p-1">
                      <a href="#" class="Boton-Primario-Relleno Boton-Fuente-Chica">Ver catálogo</a> 
                    </div>
                                      
                 </div>                 
              </div> 
              
            </div>
            <div class="col-lg-6 my-1 order-1 order-lg-2 d-flex flex-row align-items-center justify-content-center">
                <img src="{{ $Marca->url_img}}" alt="{{ $Marca->name_arreglado}} en Uruguay. Representación oficial por  {{ $Empresa->name}} " class="">
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