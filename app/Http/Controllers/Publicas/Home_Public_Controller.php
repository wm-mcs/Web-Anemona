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
                                ArregloDeEntidades $ArregloDeEntidades,
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


      public function getProductosDeEstaCategoriaYEstaMarca($marca_name,$categoria_name,$marca_id,$categoria_id)
      {
        $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
        $Marca     = Cache::remember('Marca_'.$marca_id, 60, function() use ($marca_id) {
                     return  $this->MarcaRepo->find($marca_id);
                     });
        $Categoria = Cache::remember('Categoria_'.$categoria_id, 60, function() use ($categoria_id) {
                     return  $this->CategoriaRepo->find($categoria_id);
                     });

        $Productos = Cache::remember('Productos_De_Categoria_Y_Marca_'.$categoria_id . '-'.$marca_id, 60, function() use ($marca_id,$categoria_id) {
                     return  $this->ProductoRepo->getProductosDeCategoriaYMarca($marca_id,$categoria_id);
                     });


        

        return view('paginas.Entidades_Show_Y_Paginas.Pagina_Marca_Catetegoria', compact('Empresa','Categoria','Productos','Marca'));    
              
        dd($marca_name,$categoria_name,$marca_id,$categoria_id);
      }

      public function get_pagina_de_categoria($categoria_name,$categoria_id)
      {
        $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
        $Categoria = Cache::remember('Categoria_'.$categoria_id, 60, function() use ($categoria_id) {
                     return  $this->CategoriaRepo->find($categoria_id);
                     });
        $Productos = Cache::remember('Productos_De_Categoria_'.$categoria_id, 60, function() use ($categoria_id) {
                     return $this->ProductoRepo->getProductosDeEstaCategoria($categoria_id,'created_at','desc');
                     });

        return view('paginas.Entidades_Show_Y_Paginas.Pagina_Categoria', compact('Empresa','Categoria','Productos'));  
      }


      /**
       * 
       */
      public function getMarcaIndividual($marca_name,$marca_id)
      {
        $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
        $Marca     = Cache::remember('Marca_'.$marca_id, 60, function() use ($marca_id) {
                     return  $this->MarcaRepo->find($marca_id);
                     });

        $Productos = Cache::remember('Productos_De_Marca_'.$marca_id, 60, function() use ($marca_id) {
                     return $this->ProductoRepo->getProductosDeEstaMarca($marca_id);
                     });

        return view('paginas.Entidades_Show_Y_Paginas.Pagina_Marca', compact('Empresa','Marca','Productos'));
      }


      public function getContacto()
      {
        $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
       

        return view('paginas.Entidades_Show_Y_Paginas.Pagina_Contacto', compact('Empresa'));
      }

      public function getQuienes()
      {
        $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
       

        return view('paginas.Entidades_Show_Y_Paginas.Pagina_Quien_Es', compact('Empresa'));
      }

      public function getServicios()
      {
        $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
       

        return view('paginas.Entidades_Show_Y_Paginas.Pagina_Servicios', compact('Empresa'));
      }





}
