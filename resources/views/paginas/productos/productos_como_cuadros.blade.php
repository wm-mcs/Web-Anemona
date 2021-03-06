@extends('layouts.user_layout.user_layout')



@section('og-tags')
{{-- <meta property="og:title" content="Global Target">
     <meta property="og:description" content="Agencia de modelos, eventos y promociones.">
     <meta property="og:image" content="https://www.globaltarget.com.uy/thumbnail.jpg">
     <meta property="og:url" content="https://www.globaltarget.com.uy/"> --}}
@stop


@section('title')
   Productos   | {{$Empresa->name}}
@stop


@section('MetaContent')

@stop

@section('MetaRobot')

@stop

@section('palabras-claves')

@stop



@section('content')


<div class="flex-row-column get_width_100 BackgroundGris">

  
  <div class="col-lg-12 text-center">
     <h1 class="text-uppercase text-color-black" style="margin-top:78px;">
        <strong>Catalogo completo</strong>
     </h1>
     <hr class="my-4">
     <h4 class="text-muted mb-4">Joyas seleccionadas cuidadosamente ;)</h4>
     <h4 class="text-muted mb-4"><a href="{{route('get_pagina_productos_listado')}}">Ver tipo lista</a></h4>

  </div>
  
  

  <div class="contenedor-listado-noticias ">


    @foreach($Categorias as $Categoria)

     @if($Categoria->productos_categoria->count() > 0)

        <div class="get_width_100">

           <h2 class="producto-lista-categoria-name">{{$Categoria->name}}</h2>   


           <div class="contendor-productos-cuadros-pagina"> 
             
           
           @foreach($Categoria->productos_categoria as $Entidad)
          
            <div class="producto-cuadro-contenedor margin-right-10 mt-3">
                       @include('paginas.productos.producto_individual_tipo_cuadro')   
            </div>   

           @endforeach

           </div>
          
        </div>

        <hr class="my-8">
        
     @endif
    @endforeach 

  </div>


  </div>

  

  <img src="{{url()}}/imagenes/Slider/foto-slider-mujer.jpg" class="get_width_100">  
@stop