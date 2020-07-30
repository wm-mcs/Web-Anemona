

@if(Auth::user()->role == 'adminMcos522')
<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre de página', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>
@else
  
  {!! Form::hidden('name') !!}

@endif

<div class="formulario-label-fiel">
  {!! Form::label('titulo', 'Título', array('class' => 'formulario-label ')) !!}
  {!! Form::text('titulo', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('sub_titulo', 'Sub títtulo', array('class' => 'formulario-label ')) !!}
  {!! Form::text('sub_titulo', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('parrafo', 'Párrafo', array('class' => 'formulario-label ')) !!}
  {!! Form::text('parrafo', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('llamado_a_la_accion', 'Call to action', array('class' => 'formulario-label ')) !!}
  {!! Form::text('llamado_a_la_accion', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('link_llamado_a_la_accion', 'Link call to action', array('class' => 'formulario-label ')) !!}
  {!! Form::text('link_llamado_a_la_accion', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('posicion', 'Posición', array('class' => 'formulario-label ')) !!}
  {!! Form::select('posicion',['left'   => 'Izquierda',
                               'center' => 'Centro',
                               'rigth'  => 'Derecha'] , null,['class' => 'formulario-field'] )          !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('layer_opasity', '¿Oscurecer fondo?', array('class' => 'formulario-label ')) !!}
  <div class="contiene-aclaracion-label">
   Es para poner una capa transparente que oscurezca la imagen.  
  </div>
  {!! Form::select('layer_opasity',['si' => 'Oscurecer fondo',
                                    'no' => 'No oscurecer fondo'],null,['class' => 'formulario-field'] )          !!}
</div>

<div class="formulario-label-fiel">  
  {!! Form::label('title_tag', 'Etiqueta title', array('class' => 'formulario-label ')) !!}
  <div class="contiene-aclaracion-label">
  Por si quiero darle título diferente por cuestiones de SEO.  
  </div>
  {!! Form::text('title_tag', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">  
  {!! Form::label('description_tag', 'Etiqueta description', array('class' => 'formulario-label ')) !!}
  <div class="contiene-aclaracion-label">
  Por si quiero darle meta tag description diferente por cuestiones de SEO.  
  </div>
  {!! Form::text('description_tag', null ,['class' => 'formulario-field']) !!}
</div>


<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Desactivar'] , null,['class' => 'formulario-field'] )          !!}
</div>



