



@extends('layouts.ecomerce_minimal.layout')

@section('titulo') {{$Portada->titulo_de_la_pagina}} @stop

@section('descripcion') {{$Portada->description_de_la_pagina}} @stop

@section('robot') index, follow @stop

@section('palabras_claves') {{$Empresa->palabras_claves_empresa}} @stop

@section('logo-imagenes')

<img v-if="$root.scrolled" v-lazy="$root.Empresa.img_logo_horizontal" class="img-fluid p-lg-4" >
<img v-else v-lazy="$root.Empresa.img_logo_horizontal_blanco"  class="img-fluid p-lg-4">

@stop

@section('og-propiedades') 

<meta property="og:url"                content="{{url()}}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="{{$Portada->titulo_de_la_pagina}}" />
<meta property="og:description"        content="{{$Portada->description_de_la_pagina}}" />
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

  @include('paginas.portadas.portada_home')

@stop



@section('contenido')

     <span id="intro"></span>
     @include('paginas.home.BeFitnessMarcaDestacada')

     <novededades  v-lazy-container="{ selector: 'img' }" :empresa="Empresa"></novededades>
     <categoria-home-section  v-lazy-container="{ selector: 'img' }":empresa="Empresa" :categorias="Categorias"></categoria-home-section>
     <marcas-home  v-lazy-container="{ selector: 'img' }"
                  :titulo="Nombres_secciones_marcas.titulo_marcas_distribuimos"
                  :marcas="Marcas">
       
     </marcas-home>    

     @include('paginas.home.BeFitnessServicios')
     @include('paginas.home.BeFitnessClientes')
     
@stop 


@section('footer')
 @include('paginas.home.home_footer')
@stop
@section('vue')
   @include('paginas.vue.header-component')
   @include('paginas.vue.marca-lista')
   @include('paginas.vue.marcas_home')
   @include('paginas.vue.categorias_home_section_individual_componente')
   @include('paginas.vue.categorias_home_section_componente')
   @include('paginas.vue.novedades_componente')
   @include('paginas.vue.producto_lista_component')
   @include('paginas.vue.root')
@stop


