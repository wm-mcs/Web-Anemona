<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Entidades\Marca_de_evento;
use App\Entidades\Producto;
use Illuminate\Support\Facades\Cache;




class Categoria extends Model
{

    protected $table ='categorias_productos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    public function getNameArregladoAttribute()
    {
        return ucfirst(strtolower($this->name));
    }



    


    /**
     * PAra busqueda por nombre
     */
    public function scopeName($query, $name)
    {
        //si el paramatre(campo busqueda) esta vacio ejecutamos el codigo
        /// trim() se utiliza para eliminar los espacios.
        ////Like se usa para busqueda incompletas
        /////%% es para los espacios adelante y atras
        if (trim($name) !="")
        {                        
           $query->where('name', "LIKE","%$name%"); 
        }
        
    }

    public function scopeActive($query)
    {
                               
           $query->where('estado', "si"); 
                
    }





   

    public function getRouteAttribute()
    {
       return route('get_pagina_de_categoria',[$this->helper_convertir_cadena_para_url($this->name), $this->id]); 
    }
    
    
}