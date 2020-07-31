<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Entidades\Traits\entidadesMetodosComunes;
use App\Entidades\Traits\entidadesTagsTitleMetodos;
use App\Entidades\Traits\entidadImagen;

class PortadaDePagina extends Model
{

    use entidadesMetodosComunes;
    use entidadesTagsTitleMetodos;
    use entidadImagen;

    protected $table            ='portada_de_paginas';    
    protected $fillable         = ['name', 'description'];
    protected $img_key          = 'portada_de_pagina_id';
    protected $route_admin_name = 'get_admin_portadas_de_paginas_editar';
    



    // A t r i b u t o s   m u t a d o s
   
    
    

    
    

   

   
    
    
}