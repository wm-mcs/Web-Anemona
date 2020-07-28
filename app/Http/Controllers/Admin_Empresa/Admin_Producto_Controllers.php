<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\ProductoRepo;
use App\Repositorios\ImagenRepo;
use App\Managers\Producto\crear_producto_admin_manager;
use App\Repositorios\MarcaRepo;
use DB;
use App\Repositorios\CategoriaRepo;
use App\Http\Controllers\Interfaces\entidadCrudControllerInterface;
use App\Http\Controllers\Traits\entidadesControllerComunesCrud;





class Admin_Producto_Controllers extends Controller implements entidadCrudControllerInterface
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

  

  public function __construct(ProductoRepo  $ProductoRepo,
                              ImagenRepo    $ImagenRepo )
  {
    $this->Entidad_principal          = $ProductoRepo;
    $this->ImagenRepo                 = $ImagenRepo;
    $this->Nombre_entidad_plural      = 'Productos';
    $this->Nombre_entidad_singular    = 'Producto';
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
    return  ['name','categoria_id','marca_id','moneda','precio','stock','estado','nuevo_usado','codigo_fabricante','description'];
  }

  public function getManager($Request)
  {
    $manager = new crear_producto_admin_manager(null, $Request->all());

    return $manager;
  }

  public function getImagenMiniaturaSize()
  {
    return 600;
  }

  /**
   * olvida los cache que ponga aquí
   *
   * @return void
   */
  public function olvidarCachesAsociadoAEstaEntidad()
  {
    HelpersGenerales::helper_olvidar_este_cache('getProductosNovedadesParaHome');     
  }



  public function get_admin_crear()
  { 

    $Categorias = $this->CategoriaRepo->getEntidadActivasOrdenadasSegun('name', 'asc');
    $Marcas     = $this->MarcaRepo->getEntidadActivasOrdenadasSegun('name', 'asc');
    $Titulo              = 'Crear ' . strtolower($this->Nombre_entidad_singular);
    $Carpeta_view_admin  = $this->Carpeta_view_admin;

    return view($this->Path_view_get_admin_crear,compact('Route_crear_post','Titulo','Carpeta_view_admin', 'Categorias','Marcas'));
  }  

  public function get_admin_editar($id)
  {
    $Entidad             = $this->Entidad_principal->find($id);
    $Titulo              = 'Editar'; 
    $Route_editar_post   = $this->Route_editar_post;
    $Carpeta_view_admin  = $this->Carpeta_view_admin;
    $Categorias          = $this->CategoriaRepo->getEntidadActivasOrdenadasSegun('name', 'asc');
    $Marcas              = $this->MarcaRepo->getEntidadActivasOrdenadasSegun('name', 'asc');


    return view($this->Path_view_get_admin_editar,compact('Entidad','Titulo','Route_editar_post','Carpeta_view_admin','Categorias','Marcas'));
  }

  

  

  



  

 









  

  
}