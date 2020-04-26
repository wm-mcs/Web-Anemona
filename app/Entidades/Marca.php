<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Servicios\ArregloDeEntidades;



class Marca extends Model
{

    protected $table ='marcas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];
    protected $appends  = ['route',                           
                           'url_img',
                           'tipo_de_representacion_marca',
                           'categorias_de_marca'
                          ];






  


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
           $query->where('borrado', "no"); 
                
    }



    public function getUrlImgAttribute()
    {
        return url().'/imagenes/Marcas/'. $this->helper_convertir_cadena_para_url($this->name_img) . '.png';

    }

    public function getCategoriasDeMarcaAttribute()
    {
        $Servicio = new ArregloDeEntidades();

        return $Servicio->GetAjustoLasCategoriasDeEstaMarca($this->id);
    }

    public function getTipoDeRepresentacionMarcaAttribute()
    {
        return  ucfirst( strtolower($this->tipo_de_representacion) );  
    }

    public function getRouteAttribute()
    {
        return url(); 

        /*route('get_pagina_marca_individual',[$this->name, $this->id]);*/

    }

    public function helper_convertir_cadena_para_url($cadena)
    {
        $cadena = strtolower(trim($cadena));
        //quito caracteres - 
        $cadena = str_replace('-' ,' ', $cadena);
        $cadena = str_replace('_' ,' ', $cadena);
        $cadena = str_replace('/' ,' ', $cadena);
        $cadena = str_replace('|' ,' ', $cadena);
        $cadena = str_replace('"' ,' ', $cadena);
        $cadena = str_replace('  ' ,' ', $cadena);
        $cadena = str_replace('   ' ,' ', $cadena);
        $cadena = str_replace(' ' ,'-', $cadena);
        $cadena = str_replace('?' ,'', $cadena);
        $cadena = str_replace('¿' ,'', $cadena);

        return $cadena;
    }
    
    
}