<div class="admin-columna-contenedor">

 {{-- imagen logo --}}
 <a class="d-block my-5 p-4" href="{{route('get_home')}}">
  <img class="img-fluid" src="{{$Empresa->img_logo_cuadrado}}">
 </a>

 <div class="w-100 p-5">
   @if(Auth::user()->role === 'adminMcos522')
   <div class="row  mb-5 text-left">        
        <a class="d-block col-12  mb-1" href="{{route('get_admin_users')}}">
          <p class="m-0"> Usuarios</p>
        </a>

        <a class="d-block col-12  mb-1" href="{{route('get_admin_marcas')}}">
          <p class="m-0"> Marcas</p>
        </a> 

        <a class="d-block col-12  mb-1" href="{{route('get_admin_clientes')}}">
          <p class="m-0"> Clientes</p>
        </a>   
        
    </div>
   @endif
   <div class="row  mb-5 text-left">        
        <a class="d-block col-12  mb-1" href="{{route('get_datos_corporativos')}}">
          <p class="m-0">  La Empresa</p>
        </a>

        <a class="d-block col-12  mb-1" href="{{route('get_admin_categorias')}}">
          <p class="m-0"> Categorías</p>
        </a> 

        <a class="d-block col-12  mb-1" href="{{route('get_admin_productos')}}">
          <p class="m-0"> Productos</p>
        </a>   
        
    </div>


</div>

  

    
</div>