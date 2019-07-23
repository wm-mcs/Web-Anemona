 <section class="BackgroundGris padding-secion-custom" id="precios">
     
          <div class="get_width_100  text-center">
            <h2 class="section-heading ">Catalogo</h2>
            <hr class="my-4">
            <p class="color-text-gris mb-4"> Estas son las novedades 
            </p>



              <div class="get_width_100" id="productos-novedades-home">
                @foreach($ProductosNuevos as $Entidad)
    
                <div class="producto-cuadro-contenedor margin-right-10">
                 @include('paginas.productos.producto_individual_tipo_cuadro')   
                </div>
                @endforeach
              </div>
               
             
             
              
         
          </div>
          <div class="get_width_100 flex-row-column">
             <a href="{{route('get_pagina_productos_cuadros')}}"><div class="boton-simple my-5"> Ver todo el catalogo</div>
              </a>
          </div>
      
    </section>