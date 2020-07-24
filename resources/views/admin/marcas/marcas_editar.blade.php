@extends('layouts.admin_layout.admin_layout')

@section('miga-de-pan') 
  {{-- lugar atras --}}
  <a href="{{route('get_admin_marcas')}}"><span>Marcas</span></a>

  {{-- separador --}}
  <span class="spam-separador">|</span> 

  {{-- lugar donde esta --}}
  <span>Editar Marca</span>
@stop

@section('content')



  {{-- formulario --}}
  {!! Form::model($marca,   ['route' => ['set_admin_marcas_editar',$marca->id],
                            'method'=> 'patch',
                            'files' =>  true,
                            'id'    => 'form-de-entidad'
                          ])               !!}
   <div class="row ">

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