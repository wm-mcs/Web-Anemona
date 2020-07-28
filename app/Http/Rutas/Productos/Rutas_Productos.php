<?php 


Route::get('get_admin_productos',
[
  'uses'  => 'Admin_Empresa\Admin_Producto_Controllers@get_admin',
  'as'    => 'get_admin_productos'
]);

Route::get('get_admin_productos_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Producto_Controllers@get_admin_crear',
  'as'    => 'get_admin_productos_crear'
]);

Route::post('set_admin_productos',
[
  'uses'  => 'Admin_Empresa\Admin_Producto_Controllers@set_admin',
  'as'    => 'set_admin_productos'
]);


Route::get('get_admin_productos_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Producto_Controllers@get_admin_editar',
  'as'    => 'get_admin_productos_editar'
]); 


Route::patch('set_admin_productos_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Producto_Controllers@set_admin_editar',
  'as'    => 'set_admin_productos_editar'
]);







