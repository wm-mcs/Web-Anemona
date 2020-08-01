<?php 
namespace App\Repositorios;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Repositorios\Emails\EmailsRepo;
use Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Cache;

/**
* Contiene metodos comunes para todo los repositorios
*/
abstract class BaseRepo 
{
    /**
     * entidad que ingresamos por parametro
     */
    protected $entidad;
    

    public function __construct()
    {
      
      $this->entidad      = $this->getEntidad();
    }

   public function getEmailsRepo()
   {
    return new EmailsRepo();
   }

    public function find($id)
    {
      return $this->entidad->find($id);
    }

    
    //elimina esta entidad
    public function destruir_esta_entidad($Entidad)
    {
      $Entidad->delete();
    }

    /**
     * Me trae la primera entidad que exista según ese atributo. Si no existe devuelve string vacio
     *
     * @return objet or string "" sino existe
     */
    public function getFirstEntidadSegunAtributo($atributo,$valor)
    {
      $Entidades =  $this->getEntidad()
                         ->where($atributo,$valor)
                         ->get();

      if($Entidades->count() > 0)
      {
        return $Entidades[0];
      }     

      return '';  
    }   

    /**
     * Entidades Activas 
     */
    public function getEntidadActivas()
    {
      return $this->entidad                  
                  ->active()               
                  ->orderBy('id','desc')
                  ->get();
    }

     /** 
     * Trae las entidades ordenadas según el atributo y se puede elegir la canitdad. 
     * Si no se indica cantidad traerá todas las que haya.
     * 
     * @return array con entidades
     */
    public function getEntidadesActivasOrdendasSegunYCantidad($OrdenadasSegunAtributo = 'id',$Orden = 'desc', $Cantidad = null)
    {
      $Entidades =  $this->entidad
                         ->where('borrado','no')
                         ->active()               
                         ->orderBy($OrdenadasSegunAtributo,$Orden)
                         ->get();

       if($Cantidad === null)
       {
         return   $Entidades; 
       }                 

       if($Entidades->count() >= $Cantidad )   
       {
        return $Entidades->take($Cantidad);
       }  

       return   $Entidades;  
    }

    public function getEntidadActivasOrdenadasSegun($Order_by,$Asc_desc)
    {
      return $this->entidad                  
                  ->where('estado','si')  
                  ->where('borrado','no')            
                  ->orderBy($Order_by,$Asc_desc)
                  ->get();
    }

    /**
     * Entidades Activas Paginadas
     */
    public function getEntidadActivasPaginadas($request,$paginacion)
    {
      return $this->entidad
                  ->name($request->get('name')) 
                  ->active()               
                  ->orderBy('id','desc')
                  ->paginate($paginacion);
    }

    /**
     * Entidades Activas Paginadas y ordenadas
     */
    public function getEntidadActivasYOrdenadasSegunPaginadas($request,$OrdenadasSegunAtributo = 'id',$Orden = 'asc',$paginacion = 30)
    {
      return $this->entidad
                  ->name($request->get('name')) 
                  ->active()               
                  ->orderBy($OrdenadasSegunAtributo,$Orden)
                  ->paginate($paginacion);
    }

    
    public function getEntidadesAllPaginadasYOrdenadas($request,$OrdenadasSegunAtributo = 'id',$Orden = 'asc',$paginacion = 30)
    {

    return $this->entidad
                ->where('borrado','no')                
                ->name($request->get('name'))                
                ->orderBy($OrdenadasSegunAtributo,$Orden)
                ->paginate($paginacion);
  
    }

    
    public function getEntidadActivasAll_Segun_Atributo_y_Ordenadas($atributo,$valor_atributo,$orden,$paginacion)
    {
      return $this->entidad
                  ->active()
                  ->where($atributo,$valor_atributo)             
                  ->orderBy('id',$orden)
                  ->paginate($paginacion);
    }

    abstract public function getEntidad();

    // setters
    public function setEntidadDato($Entidad,$request,$Propiedades)
    {
      foreach ($Propiedades as $Propiedad) 
      {
        if($request->input($Propiedad) != null)
        {            
         $Entidad->$Propiedad = $request->input($Propiedad);
        }
        elseif($request->input($Propiedad) == '')
        {
          $Entidad->$Propiedad = $request->input($Propiedad);
        }         
      } 

      $Entidad->save();     

      return $Entidad;
    }    


     /**
     * grabar entidad atributo especifico
     */
    public function setAtributoEspecifico($Entidad,$atributo,$valor)
    {
      if($valor != '')
      {
        $Entidad->$atributo = $valor;
        $Entidad->save();
      }
      
    }











    // H e l p e r s 
    //funciones personalizadas para reciclar
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


    public function actualizarCache($nombreDelCache, $nuevoValorDelCache = null, $tiempo_expiracion = null)
    {

      if(Cache::has($nombreDelCache))
      {
        //borro el cache
        Cache::forget($nombreDelCache);
      }

      if($nuevoValorDelCache != null)
      {
         Cache::remember($nombreDelCache, $tiempo_expiracion, function() use ($nuevoValorDelCache){
          return  $nuevoValorDelCache ;
         }); 
      }
      

     
    }
    

}   
