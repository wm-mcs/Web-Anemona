<?php

namespace App\Servicios;
use App\Repositorios\ProductoRepo;
use Illuminate\Support\Facades\Cache;
use App\Repositorios\CategoriaRepo;
use App\Repositorios\MarcaRepo;


class ArregloDeEntidades
{
    
    protected $ProductoRepo;
    protected $CategoriaRepo;
    protected $MarcaRepo;
  

    public function __construct(
                                ProductoRepo  $ProductoRepo,
                                CategoriaRepo $CategoriaRepo,
                                MarcaRepo     $MarcaRepo   )
    {
        
        $this->ProductoRepo  = $ProductoRepo;
        $this->CategoriaRepo = $CategoriaRepo;
        $this->MarcaRepo     = $MarcaRepo;
        
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


    /**
     * Segun los productos de una marca veo las categoría que esta maneja
     */
    public function GetAjustoLasCategoriasDeEstaMarca($marca_id)
    {
      return  Cache::remember('CategoriasDeEstaMarca_'.$marca_id, 4000, function() {
           
           $Productos = $this->ProductoRepo->getProductosDeEstaMarca($marca_id); 
           $Marca     = $this->MarcaRepo->find($marca_id);

           $collection_categorias = []; 


           

           foreach($Productos as $Producto)
           {
             $Categoria = $Producto->categoria_producto;
             $Categoria->route_marca_producto =  route('getProductosDeEstaCategoriaYEstaMarca',[$Marca->name,
                                                                                                $Categoria->name,
                                                                                                $Marca->id,
                                                                                                $Marca->id]);
             $collection_categorias->push($Categoria);
           }



          return $collection_categorias->unique('id');

            

           
        });
        
    }
}