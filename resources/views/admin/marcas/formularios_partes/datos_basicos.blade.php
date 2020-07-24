<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('description', 'Descripción', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('description', null ,['class' => 'formulario-field']) !!}
</div>



<div class="formulario-label-fiel">
<div class="contiene-aclaracion-label">
  Si se indica la opción <strong>Distribuidor</strong>  implicaría que: venden los productos y que además hacen el service. Si se indica la opción <strong>Service</strong> implicaría que: son service autorizado por la marca. 
</div>
  {!! Form::label('tipo_de_representacion', 'Tipo de representación', array('class' => 'formulario-label ')) !!}
  {!! Form::select('tipo_de_representacion',  ['distribuidor' => 'Distribuidor',
                                               'service'      => 'Service'] , ['class' => 'formulario-field'] )          !!}
</div>

<div class="contiene-aclaracion-label">
  <div class="formulario-label-aclaracion">
  Aquí se indica que tanto queremos destacar a esta marca. 
</div>
  {!! Form::label('rank', 'Calidad / Prestigio', array('class' => 'formulario-label ')) !!}
  {!! Form::select('rank',  [1 => '1 - Normal',
                             2 => '2 - Alta ',
                             3 => '3 - Elite'] , ['class' => 'formulario-field'] )          !!}
</div>
<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Inactivo'] , ['class' => 'formulario-field'] )          !!}
</div>

