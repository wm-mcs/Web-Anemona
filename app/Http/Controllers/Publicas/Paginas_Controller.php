<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\MarcaRepo;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App\Repositorios\ProductoRepo;
use App\Repositorios\CategoriaRepo;
use Illuminate\Support\Facades\Cache;


class Paginas_Controller extends Controller
{
   

   
    protected $EmpresaRepo;
    protected $MarcaRepo;   
    
    protected $ProductoRepo;
    protected $CategoriaRepo;

    public function __construct(EmpresaRepo         $EmpresaRepo, 
                                MarcaRepo           $MarcaRepo,
                                ProductoRepo        $ProductoRepo,
                                CategoriaRepo       $CategoriaRepo   )
    {
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->MarcaRepo           = $MarcaRepo;     
        $this->ProductoRepo        = $ProductoRepo; 
        $this->CategoriaRepo       = $CategoriaRepo;
    }

    //Contacto
    public function get_pagina_contacto()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.contacto.contacto', compact('Empresa'));
    }

    
       

    


    //Empresa
    public function get_pagina_empresa()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.empresa.empresa', compact('Empresa'));
    }

    

    //servicios
    public function get_pagina_servicios()
    {
        return view('paginas.servicios.servicios');
    }

   



          


    // P r o d u c t o s 

    public function get_pagina_productos_listado()
    {
       $Empresa    = $this->EmpresaRepo->getEmpresaDatos();

       $Categorias =  Cache::remember('CategoriasProductosListados', 30, function() {
                              return $this->CategoriaRepo->getEntidadActivas(); 
                      }); 
       
       return view('paginas.productos.productos_como_listado',compact('Categorias','Empresa'));
    }   

    public function get_pagina_productos_cuadros()
    {
       $Empresa    = $this->EmpresaRepo->getEmpresaDatos();

       $Categorias =  Cache::remember('CategoriasProductosListados', 30, function() {
                              return $this->CategoriaRepo->getEntidadActivas(); 
                      }); 
       
       return view('paginas.productos.productos_como_cuadros',compact('Categorias','Empresa'));
    }    
  
            //Noticias Individual
            public function get_pagina_producto_individual($name,$id)
            {
                $Entidad   = $this->ProductoRepo->find($id);
                $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
                
                
                return view('paginas.productos.producto_individual',compact('Entidad','Empresa'));
            }








}