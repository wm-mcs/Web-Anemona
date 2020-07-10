<?php

namespace App\Servicios;
use App\Repositorios\ProductoRepo;
use Illuminate\Support\Facades\Cache;



class Helpers
{

    public static function helper_convertir_cadena_para_url($cadena)
    {

        $cadena = strtolower(trim($cadena));
        //quito caracteres - 
        $cadena = str_replace('-' ,' ', $cadena);
        $cadena = str_replace('_' ,' ', $cadena);
        $cadena = str_replace('/' ,' ', $cadena);
        $cadena = str_replace('|' ,' ', $cadena);
        $cadena = str_replace('"' ,' ', $cadena);
        $cadena = str_replace('  ' ,' ', $cadena);
        $cadena = str_replace('   ' ,' ', $cadena);
        $cadena = str_replace('    ' ,' ', $cadena);
        $cadena = str_replace(' ' ,'-', $cadena);
        $cadena = str_replace('?' ,'', $cadena);
        $cadena = str_replace('¿' ,'', $cadena);
        return $cadena;
    
    }
}