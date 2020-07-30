<?php

namespace App\Entidades\Traits;
use App\Helpers\HelpersGenerales;

trait entidadesTagsTitleMetodos{
    

    public function getTituloDeLaPaginaAttribute()
    {
        if(($this->title_tag === null) || ($this->title_tag === ''))
        {
            // P o r   s i   n o   e x i s t e   l a   p r o p i e d a d  
            if(isset($this->titulo))
            {
                $string = $this->titulo;
            }
            else
            {
                $string = $this->name;
            }    

            return '【 ' .  HelpersGenerales::helper_convertir_cadena_solo_letras_y_numeros($string) . '  】';
        }
        else
        {
            return '【 ' .  $this->title_tag . '  】';
        }
    }

    public function getDescriptionDeLaPaginaAttribute()
    {
        if(($this->description_tag === null) || ($this->description_tag === ''))
        {
            $Cadena  = '';

            // P o r   s i   n o   e x i s t e   l a   p r o p i e d a d  
            if(isset($this->sub_titulo))
            {
                if(($this->sub_titulo != null) || ($this->sub_titulo != ''))
                {
                    $Cadena .= $this->sub_titulo . '. ';
                }

                if(($this->parrafo != null) || ($this->parrafo != ''))
                {
                    $Cadena .= $this->parrafo . '. ';
                }   

                return $Cadena;  
            }
            else
            {
               return $this->descripcion_breve;
            }    
              
        }
        else
        {
            return $this->description_tag;
        }
    }

}    