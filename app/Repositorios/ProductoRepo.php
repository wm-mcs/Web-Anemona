<?php 

namespace App\Repositorios;

use App\Entidades\Producto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class ProductoRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Producto();
  }



 
  /**
   *  Devuelve el ultimo evento
   */
  public function getUltimo()
  {
    return $this->getEntidad()->active()->orderBy('fecha', 'desc')->get()->first();
  }

  /**
    *  Devulve el Penultimo evento
    */  
  public function getPenultimo()
  {
      return $this->getEntidad()->active()->orderBy('fecha', 'desc')->take(2)->get()->last();
  }


  public function getProductosNovedadesParaHome()
  {
    $Cantidad_a_traer = 6 ;

    $Cantidad = $this->getEntidad()
                ->where('borrado','no')
                ->where('estado', 'si')
                ->get();

    if($Cantidad >= $Cantidad_a_traer)   
    {
      return $this->getEntidad()
                  ->where('borrado','no')
                  ->where('estado', 'si')
                  ->orderBy('created_at','desc')
                  ->take($Cantidad_a_traer)
                  ->get();
    }         

      return $this->getEntidad()
                  ->where('borrado','no')
                  ->where('estado', 'si')
                  ->orderBy('created_at','desc')
                  ->take($Cantidad)
                  ->get();
  }

  
  
}