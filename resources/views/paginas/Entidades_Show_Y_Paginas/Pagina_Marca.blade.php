@extends('layouts.ecomerce_minimal.layout')

@section('titulo') Lo mejor de {{$Marca->name}} en Uruguay está en Be Fitness @stop

@section('descripcion') 

@if($Marca->tipo_de_representacion == 'distribuidor') Representante oficial de {{$Marca->name}} 

@endif en Uruguay | {{$Marca->description}} 

@stop

@section('robot') index, follow @stop

@section('palabras_claves') {{$Marca->name}} @stop





    


@section('og-propiedades') 

<meta property="og:url"                content="{{url()}}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="Lo mejor de {{$Marca->name}} en Uruguay está en Be Fitness" />
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

          <div class="row d-flex flex-row align-items-center p-4 mt-3 mt-lg-0 p-lg-0">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
              <div class="">
                <h1 class="mb-2 titulos-class text-uppercase text-color-black">Lo mejor de {{ $Marca->name_arreglado}}  </h1>
                <h4 class="color-text-gris">

                 @if($Marca->tipo_de_representacion == 'distribuidor') 
                 Somos distribuidores oficiales en Uruguay
                 @else

                 @endif
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
                      <a href="#catalogo" class="Boton-Primario-Relleno Boton-Fuente-Chica">Ver catálogo</a> 
                    </div>
                                      
                 </div>                 
              </div> 
              
            </div>
            <div class="col-lg-6 mb-2 mb-lg-0my-1 order-1 order-lg-2 d-flex flex-row align-items-center justify-content-start justify-content-lg-center">
                <img src="{{ $Marca->url_img_foto_principal}}" alt="{{ $Marca->name_arreglado}} en Uruguay. Representación oficial por  {{ $Empresa->name}} " class="">
            </div>
             
            
            
          </div>
        </div>
        
  </div>
@stop



@section('contenido')

    
  <section class="site-section background-gris-1">
    <div class="container">
      <h2 class="parrafo-class color-text-gris">
       <b>{{$Marca->name_arreglado}} </b> es una marca de origen {{$Marca->origen}}: {{$Marca->description}} 
      </h2>
    </div>
  </section>
 
  <producto-show-interface :empresa="Empresa" titulo="Productos de {{$Marca->name_arreglado}}"></producto-show-interface>
    
  @if(!is_null($Marca->url_oficial_marca) && !empty($Marca->url_oficial_marca) ) 
   <section class="site-section background-gris-2">
    <div class="container">
      <p>
       <b>Página oficial de  {{$Marca->name_arreglado}}</b>: <a href=" {{$Marca->url_oficial_marca}} "> {{$Marca->url_oficial_marca}} </a>. 
      </p>
    </div>
  </section>
  @endif

   

    
         
       
   
     
@stop 


  @section('footer')
   @include('paginas.home.home_footer')
  @stop
@section('vue')


   @include('paginas.vue.productos_show_interface')
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