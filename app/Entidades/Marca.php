<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Servicios\ArregloDeEntidades;
use App\Helpers\HelpersGenerales;
use App\Entidades\Traits\entidadesMetodosComunes;
use App\Entidades\Traits\entidadImagen;



class Marca extends Model
{


    use entidadesMetodosComunes;
    use entidadImagen;

    protected $table    ='marcas';    
    protected $fillable = ['name', 'description'];
    protected $appends  = ['route',                           
                           'url_img_foto_principal',
                           'tipo_de_representacion_marca',
                           'categorias_de_marca',
                           'name_arreglado'
                          ];
    protected $img_key            = 'marca_id';
    protected $route_admin_name   = 'get_admin_marcas_editar';                      
    


  

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