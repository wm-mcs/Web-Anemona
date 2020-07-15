<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\HelpersGenerales;
use App\Entidades\Traits\entidadesMetodosComunes;
use App\Entidades\Traits\entidadImagen;




class Cliente extends Model
{

  use entidadesMetodosComunes;
  use entidadImagen;

  protected $table              ='clientes';    
  protected $fillable           = ['name'];
  /*protected $appends            = ['imagen_principal'];*/
  protected $img_key            = 'cliente_id';
  protected $route_admin_name   = 'get_admin_clientes_editar';

}  