<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Repositorios\MarcaRepo;
use Illuminate\Http\Request;
use App\Managers\marca_manager;
use App\Http\Controllers\Interfaces\entidadCrudControllerInterface;
use App\Http\Controllers\Traits\entidadesControllerComunesCrud;
use App\Repositorios\ImagenRepo;





class Admin_Marcas_Controllers extends Controller  implements entidadCrudControllerInterface
{


 use entidadesControllerComunesCrud;

  protected $Entidad_principal;
  protected $Nombre_entidad_plural      ;
  protected $Nombre_entidad_singular    ;
  protected $Carpeta_view_admin         ; 
  protected $Path_view_get_admin_index  ;
  protected $Path_view_get_admin_crear  ;
  protected $Path_view_get_admin_editar ;
  protected $Route_index ;               
  protected $Route_crear  ;             
  protected $Route_crear_post ;          
  protected $Route_editar_post ;         
  protected $Route_luego_de_crear;       
  protected $Path_carpeta_imagenes;      
  protected $Nombre_del_campo_imagen;    

  

  public function __construct(MarcaRepo   $MarcaRepo,
                              ImagenRepo  $ImagenRepo )
  {
    $this->Entidad_principal          = $MarcaRepo;
    $this->ImagenRepo                 = $ImagenRepo;
    $this->Nombre_entidad_plural      = 'Marcas';
    $this->Nombre_entidad_singular    = 'Marca';
    $this->Carpeta_view_admin         = strtolower(str_replace(' ','_', $this->Nombre_entidad_plural));
    $this->Path_view_get_admin_index  = 'admin.' . $this->Carpeta_view_admin . '.home';
    $this->Path_view_get_admin_crear  = 'admin.' . $this->Carpeta_view_admin . '.crear';
    $this->Path_view_get_admin_editar = 'admin.' . $this->Carpeta_view_admin . '.editar';
    $this->Route_index                = 'get_admin_'. $this->Carpeta_view_admin .'';
    $this->Route_crear                = 'get_admin_'. $this->Carpeta_view_admin .'_crear';
    $this->Route_crear_post           = 'set_admin_'. $this->Carpeta_view_admin .'_crear';
    $this->Route_editar_post          = 'set_admin_'. $this->Carpeta_view_admin .'_editar';
    $this->Route_luego_de_crear       = $this->Route_index;
    $this->Path_carpeta_imagenes      = $this->Carpeta_view_admin .'/'; //donde se gurarda la imagen. Debe existir
    $this->Nombre_del_campo_imagen    = strtolower($this->Nombre_entidad_singular) . '_id';
    
  }

  public function getPropiedades()
  {
    return ['name','description','estado','rank','tipo_de_representacion','origen','url_oficial_marca'];
  }

  public function getManager($Request)
  {
    $manager = new marca_manager(null, $Request->all());

    return $manager;
  }

  public function getImagenMiniaturaSize()
  {
    return 400;
  }

  /**
   * olvida los cache que ponga aquí
   *
   * @return void
   */
  public function olvidarCachesAsociadoAEstaEntidad()
  {
    HelpersGenerales::helper_olvidar_este_cache('ClientesHome'); 
    HelpersGenerales::helper_olvidar_este_cache('ClientesTodos'); 
  }

  

  
}