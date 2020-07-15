<?php

namespace App\Entidades\Traits;

use App\Helpers\HelpersGenerales;

trait entidadesMetodosComunes{

     public function getRouteAdminAttribute()
     {

        if(isset($this->route_admin_name))
        {
          return route($this->route_admin_name,$this->id);
        }
        else
        {
          return null;
        }
        
     }    

     public function getNameArregladoAttribute()
     {
        return ucfirst(strtolower($this->name));
     }

    /* S c o p e s */

    public function scopeName($query, $name)
    {        
        if (trim($name) !="")
        {                        
           $query->where('name', "LIKE","%$name%"); 
        }        
    }
   

    public function scopeActive($query)
    {                               
       $query->where('estado', "si");
       $query->where('borrado', "no");                 
    }


}    