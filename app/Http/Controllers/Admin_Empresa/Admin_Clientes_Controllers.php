<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\ClienteRepo;
use App\Repositorios\ImagenRepo;
use App\Helpers\HelpersGenerales;
use App\Managers\cliente_manager;
use App\Http\Controllers\Interfaces\entidadCrudControllerInterface;
use App\Http\Controllers\Traits\entidadesControllerComunesCrud;




class Admin_Clientes_Controllers extends Controller implements entidadCrudControllerInterface
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

  

  public function __construct(ClienteRepo   $ClienteRepo,
                              ImagenRepo    $ImagenRepo )
  {
    $this->Entidad_principal          = $ClienteRepo;
    $this->ImagenRepo                 = $ImagenRepo;
    $this->Nombre_entidad_plural      = 'Clientes';
    $this->Nombre_entidad_singular    = 'Cliente';
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
    return ['name','description','descripcion_breve','estado','rank'];
  }

  public function getManager($Request)
  {
    $manager = new cliente_manager(null, $Request->all());

    return $manager;
  }

  public function getImagenMiniaturaSize()
  {
    return 1000;
  }

  /**
   * olvida los cache que ponga aquí
   *
   * @return void
   */
  public function olvidarCachesAsociadoAEstaEntidad()
  {
    HelpersGenerales::helper_olvidar_este_cache('ClientesHome'); 
          
  }


  public function get_admin(Request $Request)
  { 
    $Entidades           = $this->Entidad_principal->getEntidadActivasYOrdenadasSegunPaginadas( $Request, 'rank','desc',6);
    $Titulo              = $this->Nombre_entidad_plural;
    $Route_crear         = $this->Route_crear;
    $Route_busqueda      = $this->Route_index;
    $Carpeta_view_admin  = $this->Carpeta_view_admin;

    return view($this->Path_view_get_admin_index, compact('Entidades','Route_crear','Titulo','Route_busqueda','Carpeta_view_admin'));
  }

  




  
  

  
  

  
}