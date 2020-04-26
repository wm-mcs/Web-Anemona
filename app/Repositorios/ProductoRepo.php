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
    $Cantidad_a_traer = 4 ;

    $Productos = $this->getEntidad()
                ->where('borrado','no')
                ->where('estado', 'si')
                ->get();

    if($Productos->count() >= $Cantidad_a_traer)   
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
                  ->get();
  }


  public function getProductosDeEstaCategoria($Categoria_id,$Order_by,$Asc_desc)
  {
    return $this->getEntidad()
                ->where('borrado','no')
                ->where('estado', 'si')
                ->where('categoria_id',$Categoria_id)
                ->orderBy($Order_by,$Asc_desc)
                ->get();
  }

  public function getProductosDeEstaCategoriaParaHome($Categoria_id)
  {

    $Cantidad_máxima_a_consultar = 4 ;
    $Productos = $this->getEntidad()
                ->where('borrado','no')
                ->where('estado', 'si')
                ->where('categoria_id',$Categoria_id)
                ->orderBy('name','asc')
                ->get();

    if($Productos->count() >= $Cantidad_máxima_a_consultar) 
    {
      $Productos->take($Cantidad_máxima_a_consultar);
    }
    else
    {
      return $Productos;
    }

    return $Productos;

  }

  public function getProductosDeEstaMarca($marca_id, $Order_by = 'name', $Asc_des = 'asc', $Cantidad = null)
  {
    $Productos = $this->getEntidad()
                      ->where('borrado','no')
                      ->where('estado', 'si')
                      ->where('marca_id',$marca_id)
                      ->orderBy($Order_by,$Asc_des)
                      ->get();


    if(($Productos->count() >= $Cantidad ) && ($Cantidad != null)) 
    {
      $Productos->take($Cantidad);
    }
    else
    {
      $Productos;
    }

    return $Productos;
  }

  
  
}