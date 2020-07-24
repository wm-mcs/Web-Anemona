@extends('layouts.admin_layout.admin_layout')

@section('miga-de-pan') 
 <h1 class="titulos-class mb-3  text-color-primary font-secondary">Editar</h1> 
 <p class="parrafo-class color-text-gris mb-3"> 
  Link pública <i class="fas fa-hand-point-right"></i> <a href="{{$Entidad->route}}"  target="_blank">{{$Entidad->name}}</a>
 </p>
 <p class="parrafo-class color-text-gris"> Para guardar los cambios deben apretar el botón que está abajo del todo</p>
@stop

@section('content')



  {{-- formulario --}}
  {!! Form::model($Entidad,   ['route' => ['set_admin_marcas_editar',$Entidad->id],
                            'method'=> 'patch',
                            'files' =>  true,
                            'id'    => 'form-de-entidad'
                          ])               !!}
   <div class="row p-2 p-lg-4">

      {{-- datos corporativos --}}
      <div class="col-lg-6 contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
         @include('admin.marcas.formularios_partes.datos_basicos')
        </div>
      </div>

      {{-- imagenes corporativos --}}
      <div class="col-lg-6  contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo">Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.marcas.formularios_partes.datos_imagenes')
        </div>
      </div>

        

      
   </div>
   
   <button class="Boton-Primario-Sin-Relleno mt-3" type="submit" form="form-de-entidad" value="Submit">Guardar</button>

  {!! Form::close() !!}
  
@stop