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
    public function getEntidadActivasYOrdenadasSegunPaginadas($request,$OrdenadasSegunAtributo,$Orden,$paginacion)
    {
      return $this->entidad
                  ->name($request->get('name')) 
                  ->active()               
                  ->orderBy($OrdenadasSegunAtributo,$Orden)
                  ->paginate($paginacion);
    }

    
    public function getEntidadesAllPaginadasYOrdenadas($request,$OrdenadasSegunAtributo,$Orden,$paginacion)
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



    //setters
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


    public function setImagen($Entidad,$request,$nombreDelCampoForm,$carpetaDelArchivo,$nombreDelArchivo,$ExtensionDelArchivo,$redimencionar_a = null,$file = null)
    {
      //nombre del Archico / Carpeta Incluido
      $nombre = $carpetaDelArchivo.$nombreDelArchivo.$ExtensionDelArchivo;

      if($file == null)
      {

        //obtenemos el campo file definido en el formulario
        $file    = $request->file($nombreDelCampoForm);        

        $validator = $request->hasFile($nombreDelCampoForm);


      }
      else
      {
        $archivo   = $file;
        $validator = true;
      }
      
       if($validator != null)
       {

        $archivo = File::get($file);

        if($redimencionar_a != null)
        {
            $imagen_insert = Image::make($archivo)->resize($redimencionar_a, null, function ($constraint) {
                                                                           $constraint->aspectRatio();
                                                                       })->save('imagenes/'.$nombre,70);
        }
        else
        {
           $imagen_insert = Image::make($archivo); 

           $imagen_insert->save('imagenes/'.$nombre,70);   

        }
           


         //guardo_el_img
         if($Entidad != null)
         {
           try
           {
            $this->setAtributoEspecifico($Entidad,'img',$Entidad->name_slug);
           }
           catch (Exception $e){}
           
         }

         
       }
    }

     /**
       * Para subidas multiples  
       */  
    public function setImagenMultiples($Entidad,$file,$nombreDelCampoForm,$carpetaDelArchivo,$nombreDelArchivo,$ExtensionDelArchivo)
    {   
         //nombre del Archico / Carpeta Incluido
         $nombre = $carpetaDelArchivo.$nombreDelArchivo.$ExtensionDelArchivo;
         $Entidad->$nombreDelCampoForm= $nombre;              
         
         //indicamos que queremos guardar un nuevo archivo en el disco local
         $imagen_insert = Image::make(File::get($file));
         $imagen_insert->save('imagenes/'.$nombre,70);    
         $Entidad->save();  


       
         
       
    }


    /**
     * De vuelve las imagenes segun el campo e id a buscar de la entidad
     */
    public function get_imagen_principal_de_entidad_especifica($atributo_name,$id_del_atributo)
    {
      return $this->entidad
                  ->where($atributo_name,$id_del_atributo)
                  ->where('foto_principal','si')
                  ->get();
    }

    public function set_datos_de_img($file, $Entidad,$nombre_de_la_propiedad,$id_de_la_propiedad,$request,$LugarDondeSeAloja)
    {

          
          $Imagen = $Entidad;    

          //nombre de la calve foraña y su valor  
          $Imagen->$nombre_de_la_propiedad = $id_de_la_propiedad;

          //estado activo  
          $Imagen->estado = 'si';

          //guardo  
          $Imagen->save();

          $this->setImagenMultiples($Imagen,$file,'img',$LugarDondeSeAloja, $Imagen->id,'.png'); 

          $Imagen->save();  

        

      }

       
    

    //base Repo. Ahorro codigo
    public function cambio_a_imagen_principal_desde_base_repo($imagen_pricipal,$imagen)
    {
      //cuento si es que hay
      if($imagen_pricipal->count() > 0)
      {
        //agarro la imagen
        $imagen_principal_efectiva = $imagen_pricipal->first();
        $imagen_principal_efectiva->foto_principal = null;
        $imagen_principal_efectiva->save();


        //le indico que es la imagen pricnipal 
        $imagen->foto_principal = 'si';
        $imagen->save();
      }
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
