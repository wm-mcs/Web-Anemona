<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\ProductoRepo;
use Illuminate\Support\Facades\Cache;
use App\Repositorios\CategoriaRepo;
use App\Servicios\ArregloDeEntidades;
use App\Repositorios\MarcaRepo;



class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $ProductoRepo;
    protected $CategoriaRepo;
    protected $ArregloDeEntidades;
    protected $MarcaRepo;
  

    public function __construct(ImgHomeRepo        $ImgHomeRepo,
                                EmpresaRepo        $EmpresaRepo,
                                ProductoRepo       $ProductoRepo,
                                CategoriaRepo      $CategoriaRepo, 
                                ArregloDeEntidades $ArregloDeEntidades.
                                MarcaRepo          $MarcaRepo   )
    {
        $this->ImgHomeRepo         = $ImgHomeRepo;
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->ProductoRepo        = $ProductoRepo;
        $this->CategoriaRepo       = $CategoriaRepo;
        $this->ArregloDeEntidades  = $ArregloDeEntidades;
        $this->MarcaRepo           = $MarcaRepo;
        
    }

    public function get_home(Request $Request)
    {
           
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();

        //se ajustan los productos de las categorias
        $this->ArregloDeEntidades->AjustoCantidadDeProductosActivosDeCategorias();


        return view('paginas.home.home', compact('Empresa'));
    }

      public function getCategoriasActivas()
      {

        
        $categorias = Cache::remember('CategoriasActivas', 300000, function() {
                        return $this->CategoriaRepo->getEntidadActivasOrdenadasSegun('name','ASC');
                      }); 


        return  ['Validacion'  => true,
                 'categorias'  => $categorias];
      }


      public function getProductosDeEstaCategoriaParaHome(Request $Request)
      {
        return  ['Validacion'  => true,
                 'Productos'   => $this->ProductoRepo->getProductosDeEstaCategoriaParaHome($Request->get('categoria_id'))];
      }


      public function getCategoriaQueTengaProductosYNoEsteInvocada(Request $Request)
      {


      }


      public function getProductosNovedades()
      {
        $Productos = Cache::remember('getProductosNovedadesParaHome', 3000, function() {
                     return $this->ProductoRepo->getProductosNovedadesParaHome();
        }); 

         return  ['Validacion'  => true,
                  'Productos'   => $Productos];
      }  


      public function getMarcas()
      {

        $Marcas = Cache::remember('getMarcas', 3000, function() {
                     return $this->MarcaRepo->getEntidadActivasOrdenadasSegun('name','ASC');
        }); 


        return  ['Validacion'  => true,
                  'Marcas'     => $Marcas]  ;
      }





}
