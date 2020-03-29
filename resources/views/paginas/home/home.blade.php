@extends('layouts.ecomerce_minimal.layout')

@section('titulo') {{$Empresa->name}} @stop

@section('descripcion') {{$Empresa->descripcion_empresa}} @stop

@section('robot') index, follow @stop

@section('palabras_claves') {{$Empresa->palabras_claves_empresa}} @stop





@section('contenido')
     
@stop     


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

 <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone"><img style="height:35px; " alt="{{$Empresa->name}}" src="{{$Empresa->img_logo_cuadrado}}"></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                
                <categorias :Empresa="Empresa"></categorias>
                
                <li><a href="shop.html">Shop</a></li>
                <li><a href="#">Catalogs</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="has-children"><a href="contact.html"><span class="icon-user"></span></a>
                  <ul class="dropdown">

                  @if(Auth::guest())  
                  <li><a href="{{route('auth_login_get')}}">Iniciar</a></li>

                  @else
                   <li><a href="#">Mi cuenta</a></li>
                   <li><a href="{{route('logout')}}">Salir</a></li>
                  @endif
                  
                
                 </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>

           

            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>

@stop



@section('imagen-grande-cabecera')
  <div class="site-blocks-cover" data-aos="fade">
        <div class="container">

          <div class="row align-items-center">
            <div class="col-lg-5 text-center">
              <div class="featured-hero-product w-100">
                <h1 class="mb-2">Madewell</h1>
                <h4>Summer Collection</h4>
                <div class="price mt-3 mb-5"><strong>1,499</strong> <del>$1,999</del></div>
                <p><a href="#" class="btn btn-outline-primary rounded-0">Shop Now</a> <a href="#" class="btn btn-primary rounded-0">Shop Now</a></p>
              </div>  
            </div>
            <div class="col-lg-7 align-self-end text-center text-lg-right">
              <img src="images/new/person_transparent.png" alt="Image" class="img-fluid img-1">
            </div>
            
          </div>
        </div>
        
  </div>
@stop



@section('vue')
   
   @include('paginas.vue.categorias_componente')
   @include('paginas.vue.producto_lista_component')
   @include('paginas.vue.root')



@stop


