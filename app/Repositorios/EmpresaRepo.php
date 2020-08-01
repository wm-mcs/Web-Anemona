<?php 

namespace App\Repositorios;

use App\Entidades\Empresa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class EmpresaRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Empresa();
  }


  public function getEmpresaDatos()
  {
     return $this->getEntidad()->find(1);
  }

  
}
