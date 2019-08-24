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
        
           
        $Empresa              = $this->EmpresaRepo->getEmpresaDatos(); 
        

        return view('paginas.home.home', compact('Empresa'));
    }


}
