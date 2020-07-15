<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Entidades\ImgHome;
use App\Entidades\Categoria;
use App\Entidades\ProductoImg;
use Illuminate\Support\Facades\Cache;
use App\Helpers\HelpersGenerales;
use App\Entidades\Traits\entidadesMetodosComunes;





class Producto extends Model
{

    use entidadesMetodosComunes;

    protected $table    ='productos';
    protected $fillable = ['name', 'description'];
    protected $appends  = ['route',
                           'categoria_producto',
                           'url_img',
                           'precio_producto',
                           'name_arreglado'
                          ];



    public function imagenes()
    {
      return $this->hasMany(ProductoImg::class,'producto_id','id')->where('estado','si');
    }

        public function getImagenesProductoAttribute()
        {
            return Cache::remember('ImagenesProducto'.$this->id, 60, function() {
                                  return $this->imagenes; 
                              }); 
        }


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


  

  


    public function getUrlImgMasterAttribute()
    {
        //imagenes asoiadas al proyecto
        $imagenes = $this->imagenes;

        //veo si hay alguna que tenga el atributo
        $cantidad_imagenes = $imagenes->where('foto_principal','si')->count();
        

        if($cantidad_imagenes === 1)
        {
            $imagen_principal = $imagenes->where('foto_principal','si')->first();
            

            return $imagen_principal->url_img;
        }
        elseif($cantidad_imagenes === 0)
        {
            $imagen = $imagenes->first();
            if($imagen == null)
            {
               return 'null';
            }
            
            $imagen->foto_principal = 'si';
            $imagen->save();

            return $imagen->url_img;
        }   
        else
        {
            return url().'/imagenes/'.$this->img;
        }    
        
        
    }

    public function getUrlImgAttribute()
    {
        return Cache::remember('ImagenProducto'.$this->id, 15, function() {
                              return $this->url_img_master; 
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