<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\ProductoRepo;
use Illuminate\Support\Facades\Cache;



class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $ProductoRepo;
  

    public function __construct(ImgHomeRepo  $ImgHomeRepo,
                                EmpresaRepo  $EmpresaRepo,
                                ProductoRepo $ProductoRepo )
    {
        $this->ImgHomeRepo  = $ImgHomeRepo;
        $this->EmpresaRepo  = $EmpresaRepo;
        $this->ProductoRepo = $ProductoRepo;
        
    }

    public function get_home(Request $Request)
    {
        
        $Route                = 'post_contacto_form';       
        $Empresa              = $this->EmpresaRepo->getEmpresaDatos(); 
        $ProductosNuevos      = Cache::remember('ProductosNuevosHome', 30, function() use ($Request) {
                                   return $this->ProductoRepo->getUltimasEntidadesRegistradasRandomActive($Request,4) ; 
                                });

        return view('paginas.home.home', compact('Route','Empresa','ProductosNuevos'));
    }


}
