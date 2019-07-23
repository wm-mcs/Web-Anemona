<?php 

//Productos
Route::get('/productos-lista' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_productos_listado',
  'as'   => 'get_pagina_productos_listado']
);

Route::get('/productos' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_productos_cuadros',
  'as'   => 'get_pagina_productos_cuadros']
);



     //Noticia Individual
      Route::get('/{name}/{id}' , [                    
        'uses' => 'Publicas\Paginas_Controller@get_pagina_producto_individual',
        'as'   => 'get_pagina_producto_individual']
      );