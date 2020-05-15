<?php 

namespace App\Repositorios;

use App\Entidades\Categoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class CategoriaRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Categoria();
  }



  public function getCategoriasActivasConProductos($Orden_atributo,$Orden = 'asc')
  {
    
    
        $entidades = $this->entidad              
                          ->active()
                          ->where('cantidad_de_productos_activos','>',0)
                          ->orderBy($Orden_atributo,$Orden)
                          ->get();
       

    return $entidades;
  }


 


  
}