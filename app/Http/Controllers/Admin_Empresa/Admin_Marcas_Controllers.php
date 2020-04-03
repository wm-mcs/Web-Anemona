<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Repositorios\MarcaRepo;
use Illuminate\Http\Request;
use App\Managers\marca_manager;



class Admin_Marcas_Controllers extends Controller
{

  protected $MarcaRepo;

  public function __construct(MarcaRepo $MarcaRepo)
  {
    $this->MarcaRepo = $MarcaRepo;
  }

  //home admin User
  public function get_admin_marcas(Request $Request)
  { 
    $marcas = $this->MarcaRepo->getMarcasParaAdminOrdenadasAlfabeticamente($Request,30);

    //mostrar marcas de la a a la z (orden)

    return view('admin.marcas.marcas_home', compact('marcas'));
  }

  //get Crear admin User
  public function get_admin_marcas_crear()
  {  
    return view('admin.marcas.marcas_crear');
  }

  //set Crear admin User
  public function set_admin_marcas_crear(Request $Request)
  {     


      $manager = new marca_manager(null,$Request->all());

      if(!$manager->isValid())
      {
        return redirect()->back()->withErrors($manager->getErrors())->withInput($manager->getData());
      }

      //propiedades para crear
      $Propiedades = ['name','description','estado','rank'];

      //traigo la entidad
      $marca = $this->MarcaRepo->getEntidad();
      $marca->borrado = 'no';

      //grabo todo las propiedades
      $this->MarcaRepo->setEntidadDato($marca,$Request,$Propiedades);     

      //para la imagen
      $this->MarcaRepo->setImagen($marca,$Request,'img','Marcas/',$this->MarcaRepo->helper_convertir_cadena_para_url($marca->name) ,'.png'); 

      //para dar nombre a la imagen
      $this->MarcaRepo->setAtributoEspecifico($marca,'name_img', strtolower($marca->name));

     return redirect()->route('get_admin_marcas')->with('alert', 'Marca creada correctamente');
    
  }

  //get edit admin marca
  public function get_admin_marcas_editar($id)
  {
    $marca = $this->MarcaRepo->find($id);

    return view('admin.marcas.marcas_editar',compact('marca'));
  }

  //set edit admin marca
  public function set_admin_marcas_editar($id,Request $Request)
  {
    $manager = new marca_manager(null,$Request->all());

    if(!$manager->isValid())
    {
      return redirect()->back()->withErrors($manager->getErrors())->withInput($manager->getData());
    }

    $marca = $this->MarcaRepo->find($id);    

    //propiedades para crear
    $Propiedades = ['name','description','estado','rank'];    

    //grabo todo las propiedades
    $this->MarcaRepo->setEntidadDato($marca,$Request,$Propiedades);

    $this->MarcaRepo->setImagen($marca,$Request,'img','Marcas/', $marca->name,'.png');

    //si tiene imagen cambio el nombre de la misma
    if($Request->hasFile())
    {
      $this->MarcaRepo->setAtributoEspecifico($marca,'name_img', strtolower($marca->name));
    }

    return redirect()->route('get_admin_marcas')->with('alert', 'Marca Editado Correctamente');  
  }

  
}