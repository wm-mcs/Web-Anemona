<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\Emails\EmailsRepo;
use App\Repositorios\Emails\EmailsEspecificosDePaginasRepo;;
use App\Managers\envio_contacto_manager;



class Envio_Formularios_Controller extends Controller
{
  
    protected $EmpresaRepo;
    protected $EmailsRepo;
    protected $EmailsEspecificosDePaginasRepo;
   

    public function __construct(EmpresaRepo                    $EmpresaRepo,
                                EmailsRepo                     $EmailsRepo,
                                EmailsEspecificosDePaginasRepo $EmailsEspecificosDePaginasRepo)
    {
        
        $this->EmpresaRepo                    = $EmpresaRepo;
        $this->EmailsRepo                     = $EmailsRepo;
        $this->EmailsEspecificosDePaginasRepo = $EmailsEspecificosDePaginasRepo;
    }

    public function post_contacto_form(Request $Request)
    {
      
      $Nombre_de_empresa  = $this->EmpresaRepo->getEmpresaDatos()->name;;
      $name               = $Request->get('nombre');
      $email              = $Request->get('email');
      $mensaje            = $Request->get('mensaje');
      $Email_al_que_envia = $this->EmpresaRepo->getEmpresaDatos()->email;
      $Titulo_de_email    = $Request->get('titulo_email'); 

      



            $Validacion  = false;

            

            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $Validacion  = true;
            }
            

            

            if($Validacion == true)
            {
                $this->EmailsRepo->EnvioEmailDeContacto($name, $email, $mensaje,$Email_al_que_envia, $Nombre_de_empresa,$Titulo_de_email);                
            }

            
            $array = [ 
                   'Validacion' => $Validacion,
                   'name'       => $name, 
                   'email'      => $email,  
                   'mensaje'    => $mensaje                 
                     ];

            return json_encode($array);




    }

    public function post_envio_solicitud_trabajo_form(Request $Request)
    {
        
    }

    public function post_envio_solicitud_cotizacion_proyecto_form(Request $Request)
    {
       
    }


}
