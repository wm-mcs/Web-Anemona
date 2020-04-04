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
      'img'               => 'mimes:png',
      'categoria_id'      => 'required',
      'marca_id'          => 'required',

          
             ];

    return $rules;
  }
 
  
  
  
}