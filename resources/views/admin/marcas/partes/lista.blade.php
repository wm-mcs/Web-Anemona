
{{-- E s t a   e s   l a   v i s t a   p a r a   a d m i n  --}}
@if(isset($Mostrar_admin) && $Mostrar_admin == true)
<div class="col-md-6 col-lg-4 mb-4">
    <div class="servicio_lista service">
      <a href="{{$Route}}" class="d-flex flex-column align-items-center">
        <img data-src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="img-cover-con-formato-rectangular border-gris">
      </a>              
      <div class="p-3 mt-2">
        @include('admin.partials.atributo_estado_lista')
        <h3 class="sub-titulos-class   mb-2">
          <a href="{{$Route}}" class="font-primary text-color-secondary">
           {{$Entidad->name}}
          </a>                
        </h3>
        <p class="color-text-gris mb-2 ">
         {{$Entidad->descripcion_breve}}
        </p>
        <p>
          <a href="{{$Route}}"> Editar  <i class="fas fa-chevron-right"></i></a>
        </p>                
      </div>
    </div>
</div>
@else 
{{--  E s t a   e s   p a r a   e l   p ú b l i c o  --}}
<div class="col-6 col-lg-3 mb-4">
    <div class="w-100 Cliente-contenedor">
      <div class="d-flex flex-column align-items-center">
        <img data-src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="img-cover-con-formato-rectangular border-gris">
      </div>              
      <div class="p-3 mt-2">        
        <h3 class="sub-titulos-class  color-text-gris text-center mb-0">          
           {{$Entidad->name}}                        
        </h3> 
      </div>
    </div>
</div>
@endif