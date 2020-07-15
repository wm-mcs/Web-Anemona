<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Servicios\ArregloDeEntidades;
use App\Helpers\HelpersGenerales;
use App\Entidades\Traits\entidadesMetodosComunes;



class Marca extends Model
{


    use entidadesMetodosComunes;

    protected $table    ='marcas';    
    protected $fillable = ['name', 'description'];
    protected $appends  = ['route',                           
                           'url_img',
                           'tipo_de_representacion_marca',
                           'categorias_de_marca',
                           'name_arreglado'
                          ];
    


    public function getUrlImgAttribute()
    {
        return url().'/imagenes/Marcas/'.HelpersGenerales::helper_convertir_cadena_para_url($this->name_img) . '.png';

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

       return route('getMarcaIndividual',[HelpersGenerales::helper_convertir_cadena_para_url($this->name), $this->id]);

    }

   
    
    
}