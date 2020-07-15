<div class="admin-columna-contenedor">

 {{-- imagen logo --}}
 <a href="{{route('get_home')}}"><img class="admin-header-logo" src="{{$Empresa->img_logo_cuadrado}}"></a>

 <ul>
   @if(Auth::user()->role === 'adminMcos522')
   <div id="admin-col-superadmin">
        
        <a href="{{route('get_admin_users')}}">
          <li class="admin-columna-li mi-float-right"> Usuarios</li>
        </a>

        <a href="{{route('get_admin_marcas')}}">
          <li class="admin-columna-li mi-float-right"> Marcas</li>
        </a> 

        <a href="{{route('get_admin_clientes')}}">
          <li class="admin-columna-li mi-float-right"> Clientes</li>
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

</ul>

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