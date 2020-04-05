<?php

namespace App\Servicios;
use App\Repositorios\ProductoRepo;
use Illuminate\Support\Facades\Cache;
use App\Repositorios\CategoriaRepo;

class ArregloDeEntidades
{
    
    protected $ProductoRepo;
    protected $CategoriaRepo;
  

    public function __construct(
                                ProductoRepo  $ProductoRepo,
                                CategoriaRepo $CategoriaRepo  )
    {
        
        $this->ProductoRepo  = $ProductoRepo;
        $this->CategoriaRepo = $CategoriaRepo;
        
    }



    public function AjustoCantidadDeProductosActivosDeCategorias()
    {
    	 Cache::remember('AjustoCantidadDeProductosActivosDeCategorias', 1200, function() {
           
    	 	$CategoriasActivas = $this->CategoriaRepo->getEntidadActivas();

    	 	foreach($CategoriasActivas as $Categoria)
    	 	{
    	 		$Productos = $this->ProductoRepo->getProductosDeEstaCategoria($Categoria->id,'name','asc');

    	 		$this->CategoriaRepo->setAtributoEspecifico($Categoria,'cantidad_de_productos_activos',$Productos->count());
    	 	}

           
        });
    }
}