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
background_img_fixed img_contacto " data-aos="fade">
  <div class="background-layer-layoute-opasity  d-flex flex-row justify-content-center align-items-center">
      <div class="container">
        <div class="row d-flex flex-column align-items-start p-4 mt-3 mt-lg-0 p-lg-0">
          <div class="col-12 col-lg-6 order-2 order-lg-1 ">
            <div class="">
              <h1 class="mb-5 titulos-class text-uppercase text-white">Contáctate ahora </h1>
               <div class="row col-6 mb-5">
                <a href="{{url()}}">
                  <img src="{{$Empresa->img_logo_cuadrado}}" class="img-fluid">
                </a> 
              </div>
              <p class="parrafo-class text-white text-bold mb-5">
               Para coordinar una visita a tu gimnasio o pedir más información, contáctate  usando cualquier vía de contacto que están aquí abajo. También puedes rellenar el formulario.
              </p>   
              <div class="row">
                  <div class="col-lg-12 p-1">
                    <a href="#formulario_contacto" class="Boton-Primario-Relleno Boton-Fuente-Chica">
                      Coordiná una visita a tu gimnasio ahora mismo  <i class="fas fa-angle-double-right"></i>
                    </a> 
                  </div>          
               </div>       
            </div> 
          </div>
        </div>
      </div>
  </div>        
</div>
@stop



@section('contenido')

           <div class="container">
            <div class="row mb-5" >

                <div class="col-12 mb-5 mt-5 p-2 p-lg-5 titulos-class text-center text-color-black">Contatanos ahora a través ...</div>
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
   @include('paginas.vue.categorias_componente')   
   @include('paginas.vue.root')
@stop