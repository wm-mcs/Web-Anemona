@extends('layouts.ecomerce_minimal.layout')

@section('titulo') {{$Marca->name}} @stop

@section('descripcion') Los mejores productos {{ $Categoria->name_arreglado}} de  la marca {{$Marca->name}}. Venta en Uruguay. @stop

@section('robot') index, follow @stop

@section('palabras_claves') @stop


@section('logo-imagenes')

<img v-lazy="$root.Empresa.img_logo_horizontal" class="img-fluid p-3" >

@stop


    


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
  <div v-lazy-container="{ selector: 'img' }" class="site-blocks-cover portada-contiene-portada-general flex-row-center flex-justifice-space-around" >
        <div class="container">

          <div class="row d-flex flex-row align-items-center p-4 mt-3 mt-lg-0 p-lg-0">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
              <div class="">
                <h1 class="mb-2 titulos-class text-uppercase text-color-black">Lo mejor de {{ $Marca->name_arreglado}}  {{ $Categoria->name_arreglado}} </h1>
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
                      <a href="#intro" class="Boton-Primario-Relleno Boton-Fuente-Chica">Ver catálogo</a> 
                    </div>
                                      
                 </div>                 
              </div> 
              
            </div>
            <div class="col-lg-6 mb-2 mb-lg-0my-1 order-1 order-lg-2 d-flex flex-row align-items-center justify-content-start justify-content-lg-center">
                <img class="img-fluid p-3 p-lg-4" data-src="{{ $Marca->url_img_foto_principal}}" alt="{{ $Marca->name_arreglado}} en Uruguay. Representación oficial por  {{ $Empresa->name}} " class="">
            </div>            
          </div>
        </div>
        
  </div>
@stop



@section('contenido')

    
  <span id="intro"></span>
 
  <producto-show-interface :empresa="Empresa" titulo="Productos de {{ $Marca->name_arreglado}} de la categoría {{ $Categoria->name_arreglado}}"></producto-show-interface>
    


   

    
         
       
   
     
@stop 


  @section('footer')
   @include('paginas.home.home_footer')
  @stop
@section('vue')

   @include('paginas.vue.header-component')
   @include('paginas.vue.productos_show_interface')
  
   @include('paginas.vue.marca-lista')

   
   
   @include('paginas.vue.producto_lista_component')
   @include('paginas.vue.root')
@stop