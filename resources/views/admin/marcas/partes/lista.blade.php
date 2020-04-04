@if($marca->estado != 'si')
 <div class="admin-marca-lista-contenedor admin-marca-lista-contenedor-desactivado">
@else
 <div class="admin-marca-lista-contenedor">
@endif


   <div class="admin-marca-contiene-imagen">
     <img class="admin-marca-img" src="{{$marca->url_img}}">
   </div>
   
  
   <div class="admin-marca-contnedor-datos">
     
     <div class="admin-marca-titulo">
        <a href="{{route('get_admin_marcas_editar', $marca->id)}}">
          <span class="boton-acciones-editar">
           {{$marca->name}}   <i class="fas fa-edit"></i>  
          </span>
        </a> 

     </div>
   </div>
   
  
</div>