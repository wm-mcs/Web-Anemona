<?php 

Route::get('get_admin_clientes',
[
  'uses'  => 'Admin_Empresa\Admin_Clientes_Controllers@get_admin',
  'as'    => 'get_admin_clientes'
]);


Route::get('get_admin_clientes_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Clientes_Controllers@get_admin_crear',
  'as'    => 'get_admin_clientes_crear'
]);

      

Route::post('set_admin_clientes_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Clientes_Controllers@set_admin_crear',
  'as'    => 'set_admin_clientes_crear'
]);

Route::get('get_admin_clientes_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Clientes_Controllers@get_admin_editar',
  'as'    => 'get_admin_clientes_editar'
]);

Route::patch('set_admin_clientes_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Clientes_Controllers@set_admin_editar',
  'as'    => 'set_admin_clientes_editar'
]);