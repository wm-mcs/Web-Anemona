<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Entidades\Marca_de_evento;
use App\Entidades\Producto;
use Illuminate\Support\Facades\Cache;
use App\Helpers\HelpersGenerales;
use App\Entidades\Traits\entidadesMetodosComunes;




class Categoria extends Model
{

    use entidadesMetodosComunes;

    protected $table    ='categorias_productos';
    protected $fillable = ['name', 'description'];
    protected $appends  = ['route','name_arreglado'];


    public function productos()
    {
      return $this->hasMany(Producto::class,'categoria_id','id')->where('estado','si')->orderBy('name', 'asc');
    }


    public function getProductosCategoriaAttribute()
    {
        return Cache::remember('productos_categoria'.$this->id, 100000, function() {
                              return $this->productos; 
        }); 
    }

   
   

    public function getRouteAttribute()
    {
       return route('get_pagina_de_categoria',[HelpersGenerales::helper_convertir_cadena_para_url($this->name), $this->id]); 
    }
    
    
}