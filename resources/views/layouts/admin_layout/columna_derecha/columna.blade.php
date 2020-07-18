<div class="admin-columna-contenedor">

 {{-- imagen logo --}}
 <a class="d-block my-5 p-4" href="{{route('get_home')}}">
  <img class="img-fluid" src="{{$Empresa->img_logo_cuadrado}}">
 </a>

 <div class="w-100 p-4">
   @if(Auth::user()->role === 'adminMcos522')
   <div class="row p-2 mb-5 text-left">
        
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

   <div id="admin-col-admin">
        <a href="{{route('get_datos_corporativos')}}">
            <li class="admin-columna-li mi-float-right"><i class="fas fa-building"></i> La Empresa</li>
        </a>   
        <a href="{{route('get_admin_categorias')}}">
          <li class="admin-columna-li mi-float-right"><i class="fas fa-bars"></i> Categorias</li>
        </a>  
         <a href="{{route('get_admin_productos')}}">
          <li class="admin-columna-li mi-float-right"><i class="fab fa-product-hunt"></i> Productos</li>
        </a>     
        
    </div>

</div class="w-90">

    <div >
        <a href="{{route('get_home')}}">
            <p><small>Nombre</small></p>
        </a>
    </div>
     <div >
        <a href="{{route('logout')}}">
            <p><small>Salir</small></p>
        </a>
    </div>

    
</div>