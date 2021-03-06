<?php 




require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';






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

  Route::get('Categoría/{categoria_name}/{categoria_id}' , [                    
    'uses' => 'Publicas\Home_Public_Controller@get_pagina_de_categoria',
    'as'   => 'get_pagina_de_categoria']
  )->where(['categoria_id'  => '[0-9]+',
            'categoria_name'=> '^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$']);

  Route::get('{marca_name}/{categoria_name}/{marca_id}/{categoria_id}' , [                    
    'uses' => 'Publicas\Home_Public_Controller@getProductosDeEstaCategoriaYEstaMarca',
    'as'   => 'getProductosDeEstaCategoriaYEstaMarca']
  )->where(['categoria_id'    =>'[0-9]+',
             'marca_id'       =>'[0-9]+',
             'marca_name'     => '[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$',
             'categoria_name' => '[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$']);

  Route::get('Lo-mejor-de-{marca_name}-en-Uruguay-{marca_id}' , [                    
    'uses' => 'Publicas\Home_Public_Controller@getMarcaIndividual',
    'as'   => 'getMarcaIndividual']
  )->where([
             'marca_id'       =>'[0-9]+',
             'marca_name'     => '[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$',
            ]);


 // C o n t a c t o
Route::get('/Contacto' , [                    
  'uses' => 'Publicas\Home_Public_Controller@getContacto',
  'as'   => 'getContacto']
);

// Q u i é n   e s 
Route::get('/Sobre-Be-Fitness' , [                    
  'uses' => 'Publicas\Home_Public_Controller@getQuienes',
  'as'   => 'getQuienes']
);

// Q u i é n   e s 
Route::get('/Servicios-de-Be-Fitness-Uruguay' , [                    
  'uses' => 'Publicas\Home_Public_Controller@getServicios',
  'as'   => 'getServicios']
);




  

  














