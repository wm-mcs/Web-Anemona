<?php  
namespace App\Managers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;

/**
* 
*/
class marca_manager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      'name'        => 'required',
      'description' => 'required', 
      'rank'        => 'required', 
      'estado'      => 'required', 
      'img'         => 'mimes:png'
             ];

    return $rules;
  }
 
  
  
  
}