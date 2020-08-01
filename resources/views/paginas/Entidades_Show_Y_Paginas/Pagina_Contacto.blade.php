@extends('layouts.ecomerce_minimal.layout')

@section('titulo') {{$Portada->titulo_de_la_pagina}} @stop

@section('descripcion') {{$Portada->description_de_la_pagina}} @stop

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
  {{--*/  $Portada   =  $Portada /*--}}
  {{--*/  $Route     = '' /*--}}
  {{--*/ $EsPortada  = true /*--}}
  @include('paginas.portadas.partials.portada_molde')
@stop



@section('contenido')


           <span id="intro"></span>
           <div class="container">
            <div class="row mb-5" >

                <div class="col-12 mb-5 mt-5 p-2 p-lg-5 titulos-class text-center text-color-black">Contactanos ahora a través ...</div>
                <div class="col-6 col-lg-4 p-2 p-lg-4">
                  <div class="titulos-class text-center text-color-primary  mb-4">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  
                  <p class="parrafo-class color-text-gris text-center">Dirección: 
                     <strong>Caicobe 3363 - 4044 Montevideo - Uruguay</strong>
                   </p>
                </div>
                <div class="col-6 col-lg-4 p-2 p-lg-4">
                  <div class="titulos-class text-center text-color-primary  mb-4">
                    <i class="fas fa-phone"></i>
                  </div>
                  <p class="parrafo-class color-text-gris text-center mb-2"> 
                    Servicio Técnico <strong>(598) 092664263</strong> 
                  </p>
                  <p class="parrafo-class color-text-gris text-center">
                    Administración <strong>(598) 091692627</strong> 
                  </p>
                </div>
                <div class="col-6 col-lg-4 p-2 p-lg-4">
                  <div class=" titulos-class text-center text-color-primary mb-4">
                    <i class="fas fa-envelope"></i>
                  </div>
                  
                  <p class="parrafo-class color-text-gris text-center mb-2"> info@befitness.com.uy</p>
                  <p class="parrafo-class color-text-gris text-center"> administracion@befitness.com.uy</p>
                </div>


            <div class="col-12 mt-5 mb-5 parrafo-class color-text-gris text-center">
              También puedes usar el formulario de contacto <i class="fas fa-hand-point-down"></i> 
            </div>
            </div>

           </div>  

     <div  class="site-section" id="formulario">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-2 order-lg-2">   
               <contacto-component :empresa="Empresa" :color="variables.input_color_primary" inline-template>
                 @include('paginas.vue.Contacto.Contacto_comun')
               </contacto-component>
          </div>
        </div>
      </div>
    </div>
@stop 


  @section('footer')
   @include('paginas.home.home_footer')
  @stop
@section('vue')

   
   @include('paginas.vue.contacto-component')
    
   @include('paginas.vue.root')
@stop

@section('vue-componenetes-cdn')
  
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  {{-- <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script> --}}
@stop