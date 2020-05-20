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
      
     $Nombre_de_empresa  = $this->EmpresaRepo->getEmpresaDatos()->name;
       //valores del request
      $name               = $Request->get('name');
      $email              = $Request->get('email');
      $mensaje            = $Request->get('mensaje');
      $Email_al_que_envia = $this->EmpresaRepo->getEmpresaDatos()->email;
      $Titulo_de_email    = 'Solicitud de contacto por web de ' .$name ;
      $manager            = new envio_contacto_manager( null, $Request->all());



            $Validacion   =  $manager->isValid();            

            if($Validacion == true)
            {
                $this->EmailsRepo->EnvioEmailDeContacto($name, $email, $mensaje,$Email_al_que_envia, $Nombre_de_empresa,$Titulo_de_email,$Request);    

                 return   [ 
                   'Validacion'            => $Validacion,
                   'Validacion_mensaje'    => 'Mensaje enviado correctamente. En breve te estarmos respondiendo a '.$email    
                     ];

                      
            }
            else
            {
              return [ 
                   'Validacion'            => $Validacion,
                   'Validacion_mensaje'    => 'Upssssss! algo está mal',
                   'Errores'    => $manager->getErrors()    
                     ];
            }




    }

    public function post_envio_solicitud_trabajo_form(Request $Request)
    {
        
    }

    public function post_envio_solicitud_cotizacion_proyecto_form(Request $Request)
    {
       
    }


}
