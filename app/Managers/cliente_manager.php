<?php  
namespace App\Managers;

use App\Managers\ManagerBase;

class cliente_manager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      'name'        => 'required',
      'rank'        => 'required', 
      'estado'      => 'required', 
             ];

    return $rules;
  }
 
  
  
  
}