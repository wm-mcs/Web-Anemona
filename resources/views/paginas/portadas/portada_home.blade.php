{{--*/  $Portada   =  $Portada /*--}}
{{--*/  $Route     = '' /*--}}
{{--*/ $EsPortada  = true /*--}}
<div v-lazy-container="{ selector: 'img' }" @if(!isset($EsPortada)) v-if="scrolled" @endif class="site-blocks-cover " >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 my-3 my-lg-5 text-left align-self-center text-intro">
        <div class="row @if($Portada->posicion == 'left') @elseif($Portada->posicion == 'center') justify-content-center text-center @else justify-content-end text-right @endif">
          <div class="col-10 col-lg-7 " >
            @if(isset($EsPortada) && $EsPortada == true) 
              <h1  class="titulos-class text-white font-secondary mb-3">{{$Portada->titulo}}</h1>
              @if($Portada->sub_titulo != '')
              <h2 class="sub-titulos-class text-white no-mostrar-en-mobil mb-3">{{$Portada->sub_titulo}}
              </h2>
              @endif
              @if($Portada->parrafo != '')
              <p class="text-white no-mostrar-en-mobil mb-3">{{$Portada->parrafo}}
              </p>
              @endif 
            @else
              <h2  class="titulos-class text-white font-secondary mb-3">{{$Portada->titulo}}</h2>
              @if($Portada->sub_titulo != '')
              <h3 class="sub-titulos-class text-white no-mostrar-en-mobil mb-3">{{$Portada->sub_titulo}}
              </h3>
              @endif
              @if($Portada->parrafo != '')
              <p class="text-white no-mostrar-en-mobil mb-3">{{$Portada->parrafo}}
              </p>
              @endif 
            @endif     
            <div class="contiene-listado-de-opciones-portada">
                  <div class="contiene-item text-white">
                      Asesoría en armado de salas en 3D y renovaciones
                  </div>
                   <div class="contiene-item text-white">
                     Venta de equipos comerciales, hogar e instalaciones
                  </div>
                  <div class="contiene-item text-white">
                      Servicio de mantenimiento y service
                  </div>  
                  <div class="contiene-item text-white">
                      Servicio de alquiler de equipos
                  </div>                 
            </div>      
            @if($Route == '')
               <p class="mt-3"><a href="{{$Portada->link_llamado_a_la_accion}}" class="scroll_to Boton-Fuente-Chico Boton-Primario-Relleno"> {{$Portada->llamado_a_la_accion}} <i class="fas fa-chevron-right"></i> </a></p>
            @else            
              <p class="mt-3"><a href="{{$Route}}" class=" Boton-Fuente-Chico Boton-Primario-Relleno"> {{$Portada->llamado_a_la_accion}} <i class="fas fa-chevron-right"></i> </a></p>
            @endif  
            
          </div>
        </div>
      </div>
    </div>
  </div>



  @if(isset($EsPortada) && $EsPortada == true)   
  <img v-if="mostrar_para_celuar" class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$Portada->url_img_foto_principal_chica}}" alt="{{$Portada->titulo}} -{{$Portada->sub_titulo}} -  {{$Portada->parrafo}}  {{$Empresa->name}}.">
  <img v-else class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$Portada->url_img_foto_principal}}" alt="{{$Portada->titulo}} - {{$Portada->sub_titulo}} -  {{$Portada->parrafo}} {{$Empresa->name}}.">  
  @else
   <img v-if="mostrar_para_celuar" class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$Portada->url_img_foto_principal_chica}}" alt="{{$Portada->titulo}} -{{$Portada->sub_titulo}} -  {{$Portada->parrafo}}  Uruwild.">
   <img v-else class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$Portada->url_img_foto_principal}}" alt="{{$Portada->titulo}} - {{$Portada->sub_titulo}} -  {{$Portada->parrafo}} {{$Empresa->name}}.">  
  @endif
  
 {{-- O p a s i d a d   s t a r t   --}}
 @if($Portada->layer_opasity == 'si')  
  <div class="background-layer-layoute-opasity  d-flex flex-row justify-content-center align-items-center"></div> 
 @endif

</div> 
