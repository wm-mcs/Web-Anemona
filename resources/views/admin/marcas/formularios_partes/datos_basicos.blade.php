<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('description', 'Descripción', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('description', null ,['class' => 'formulario-field']) !!}
</div>



<div class="formulario-label-fiel">

  {!! Form::label('tipo_de_representacion', 'Tipo de representación', array('class' => 'formulario-label ')) !!}
  <div class="contiene-aclaracion-label">
   Si se indica la opción <strong>Distribuidor</strong>  implicaría que: venden los productos y que además hacen el service. Si se indica la opción <strong>Service</strong> implicaría que: son service autorizado por la marca. 
  </div>
  {!! Form::select('tipo_de_representacion',  ['distribuidor' => 'Distribuidor',
                                               'service'      => 'Service'] , null,['class' => 'formulario-field'] )          !!}
</div>


<div class="formulario-label-fiel">
  {!! Form::label('rank', 'Calidad / Prestigio', array('class' => 'formulario-label ')) !!}
  <div class="contiene-aclaracion-label">  
   Aquí se indica que tanto queremos destacar a esta marca. 
  </div>
  {!! Form::select('rank',  [1 => '1 - Normal',
                             2 => '2 - Alta ',
                             3 => '3 - Elite'] , null,['class' => 'formulario-field'] )          !!}
</div>
<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Inactivo'] , null,['class' => 'formulario-field'] )          !!}
</div>

