<?php

namespace App\Servicios;
use App\Repositorios\ProductoRepo;
use Illuminate\Support\Facades\Cache;
use App\Repositorios\CategoriaRepo;
use App\Repositorios\MarcaRepo;


class ArregloDeEntidades
{

    public function AjustoCantidadDeProductosActivosDeCategorias()
    {
    	 Cache::remember('AjustoCantidadDeProductosActivosDeCategorias', 1200, function() {
           
    	 	$CategoriaRepo = new CategoriaRepo();
            $ProductoRepo  = new ProductoRepo();
            $CategoriasActivas = $CategoriaRepo->getEntidadActivas();

    	 	foreach($CategoriasActivas as $Categoria)
    	 	{
    	 		$Productos = $ProductoRepo->getProductosDeEstaCategoria($Categoria->id,'name','asc');

    	 		$CategoriaRepo->setAtributoEspecifico($Categoria,'cantidad_de_productos_activos',$Productos->count());
    	 	}

           
        });
    }


    /**
     * Segun los productos de una marca veo las categoría que esta maneja
     */
    public function GetAjustoLasCategoriasDeEstaMarca($marca_id)
    {
      return  Cache::remember('CategoriasDeEstaMarca_'.$marca_id, 4000, function() use($marca_id) {

           $ProductoRepo  = new ProductoRepo();
           $MarcaRepo     = new MarcaRepo();
           
           $Productos     = $ProductoRepo->getProductosDeEstaMarca($marca_id); 
           $Marca         = $MarcaRepo->find($marca_id);

           $collection_categorias = collect([]); 

           foreach($Productos as $Producto)
           {
             $Categoria = $Producto->categoria_producto;
             $Categoria->route_marca_producto =  route('getProductosDeEstaCategoriaYEstaMarca',[$Marca->name,
                                                                                                $Categoria->name,
                                                                                                $Marca->id,
                                                                                                $Categoria->id]);
             $collection_categorias->push($Categoria);
           }

           return $collection_categorias->unique('id');
           
        });        
    }


    /**
     * Me devuelve las marcas de los prductos activos de está categoría
     *
     * @return array
     */
    public function getMarcasDeEstaCategoria($Categoria_id)
    {
      return  Cache::remember('MarcasDeCategoria_'.$Categoria_id, 4000, function() use($Categoria_id) {

        $ProductoRepo  = new ProductoRepo();
        $Productos     = $ProductoRepo->getProductosDeEstaCategoria($Categoria_id);

        foreach($Productos)

      });  
    }
}