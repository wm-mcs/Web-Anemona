<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\ProductoRepo;
use Illuminate\Support\Facades\Cache;
use App\Repositorios\CategoriaRepo;
use Illuminate\Support\Facades\Cache;



class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $ProductoRepo;
    protected $CategoriaRepo;
  

    public function __construct(ImgHomeRepo   $ImgHomeRepo,
                                EmpresaRepo   $EmpresaRepo,
                                ProductoRepo  $ProductoRepo,
                                CategoriaRepo $CategoriaRepo  )
    {
        $this->ImgHomeRepo   = $ImgHomeRepo;
        $this->EmpresaRepo   = $EmpresaRepo;
        $this->ProductoRepo  = $ProductoRepo;
        $this->CategoriaRepo = $CategoriaRepo;
        
    }

    public function get_home(Request $Request)
    {
           
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.home.home', compact('Empresa'));
    }

      public function getCategoriasActivas()
      {

        try
        $categorias = Cache::remember('CategoriasActivas', 300000, function() {
                        return $this->CategoriaRepo->getEntidadActivasOrdenadasSegun('name','ASC');
                      }); 


        return  ['Validacion'  => true,
                 'categorias'  => $categorias;
      }





}
