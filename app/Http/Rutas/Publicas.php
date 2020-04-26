<?php 




require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';

require __DIR__ . '/Noticias/Rutas_Noticias_Publicas.php'; 


require __DIR__ . '/Productos/Rutas_Productos_publicas.php';

//Ruta de Home
Route::get('/' , [                    
  'uses' => 'Publicas\Home_Public_Controller@get_home',
  'as'   => 'get_home']
);

	Route::get('getCategoriasActivas' , [                    
	  'uses' => 'Publicas\Home_Public_Controller@getCategoriasActivas',
	  'as'   => 'getCategoriasActivas']
	);

  Route::get('getProductosNovedades' , [                    
    'uses' => 'Publicas\Home_Public_Controller@getProductosNovedades',
    'as'   => 'getProductosNovedades']
  );

 Route::post('getProductosDeEstaCategoriaParaHome' , [                    
    'uses' => 'Publicas\Home_Public_Controller@getProductosDeEstaCategoriaParaHome',
    'as'   => 'getProductosDeEstaCategoriaParaHome']
  );
 Route::get('getMarcas' , [                    
    'uses' => 'Publicas\Home_Public_Controller@getMarcas',
    'as'   => 'getMarcas']
  );


  Route::get('Productos-de-{marca_name}-de-categría-{categoria_name}-{marca_id}-{categoria_id}' , [                    
    'uses' => 'Publicas\Home_Public_Controller@getProductosDeEstaCategoriaYEstaMarca',
    'as'   => 'getProductosDeEstaCategoriaYEstaMarca']
  );
 

  

  







//Contacto
Route::get('/Contacto' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
  'as'   => 'get_pagina_contacto']
);

//Empresa
Route::get('/Empresa' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_empresa',
  'as'   => 'get_pagina_empresa']
);

//Servicios
Route::get('/Servicios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_servicios',
  'as'   => 'get_pagina_servicios']
);





