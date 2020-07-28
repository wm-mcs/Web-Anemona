<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Entidades\ImgHome;
use App\Entidades\Categoria;
use App\Entidades\ProductoImg;
use Illuminate\Support\Facades\Cache;
use App\Helpers\HelpersGenerales;
use App\Entidades\Traits\entidadesMetodosComunes;
use App\Entidades\Traits\entidadImagen;





class Producto extends Model
{

    use entidadesMetodosComunes;
    use entidadImagen;

    protected $table    ='productos';
    protected $fillable = ['name', 'description'];
    protected $appends  = ['route',
                           'categoria_producto',
                           'url_img_foto_principal',
                           'url_img_foto_principal_chica',
                           'precio_producto',
                           'name_arreglado'
                          ];
    protected $img_key            = 'producto_id';
    protected $route_admin_name   = 'get_admin_productos_editar';                      




    public function categoria()
    {
      return $this->belongsTo(Categoria::class,'categoria_id','id');
    }
        public function getCategoriaProductoAttribute()
        {
            return Cache::remember('Categoria_'.$this->id, 60, function() {
                                  return $this->categoria; 
                              }); 
        }


  

  




    public function getRouteAttribute()
    {
        
        return url();

        /*route('get_pagina_producto_individual', [$this->helper_convertir_cadena_para_url($this->name), $this->id]);*/
    }

    public function getDescriptionParrafoAttribute()
    {

        return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $this->description);
         
         
    }

    public function getFechaDeRealizacionAttribute()
    {
         return \Carbon\Carbon::parse($this->fecha);  
    }

    public function getRouteAdminAttribute()
    {
        return route('get_admin_productos_editar',$this->id);
    }   



    public function getNameSlugAttribute()
    {
        return HelpersGenerales::helper_convertir_cadena_para_url($this->name);
    }

   

    public function getPrecioProductoAttribute()
    {
        return round($this->precio, 0);
    }
     
    
}