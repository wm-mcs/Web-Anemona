<?php  
namespace App\Managers\Producto;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;

/**
* 
*/
class crear_producto_admin_manager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      
      'name'              => 'required',
      'description'       => 'required',
      'img'               => 'mimes:jpeg',
      'categoria_id'      => 'required',
      'marca_id'          => 'required',
      'precio'            => 'required',
      'stock'             => 'required'

          
             ];

    return $rules;
  }
 
  
  
  
}