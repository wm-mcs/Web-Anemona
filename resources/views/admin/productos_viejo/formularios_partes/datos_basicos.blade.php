<div class="formulario-label-fiel">
  
{!! Form::label('categoria_id', 'Categoria', ['class' => 'control-label']) !!}

<select style="margin: 15px 0;" value="{{ Input::old('categoria_id') }}" name="categoria_id">
                   
       <OPTION 
                      VALUE="0"
                      >
       Selecciona
        </OPTION>
      @foreach($Categorias as $Categoria)
        <OPTION @if(isset($Entidad)) @if($Entidad->categoria_id == $Categoria->id ) selected @endif @endif
                      VALUE="{{$Categoria->id}}"
                      >
        {{$Categoria->name}} 
        </OPTION>
      @endforeach 
</select>

</div>

<div class="formulario-label-fiel">
  
{!! Form::label('marca_id', 'Marca', ['class' => 'control-label']) !!}

<select style="margin: 15px 0;" value="{{ Input::old('marca_id') }}" name="marca_id">
                   
       <OPTION 
                      VALUE="0"
                      >
       Selecciona
        </OPTION>
      @foreach($Marcas as $Marca)
        <OPTION @if(isset($Entidad)) @if($Entidad->marca_id == $Marca->id ) selected @endif @endif
                      VALUE="{{$Marca->id}}"
                      >
        {{$Marca->name}} 
        </OPTION>
      @endforeach 
</select>

</div>


<div class="formulario-label-fiel">
  <div class="formulario-label-aclaracion">
   Este es el modelo del producto o código según el fabricante (Marca).
  </div>
  {!! Form::label('codigo_fabricante', 'Modelo / Código fabricante', array('class' => 'formulario-label ')) !!}
  {!! Form::text('codigo_fabricante', null ,['class' => 'formulario-field']) !!}
</div>


<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('description', 'Descripción', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('description', null ,['class'   => 'formulario-field',
                                           'cols'    => '8',
                                           'row'     => '8' ]) !!}
</div>


{{-- moneda --}}
<div class="formulario-label-fiel">
            {!! Form::label('moneda', 'Moneda', array('class' => 'formulario-label ')) !!}
            {!! Form::select('moneda',config('options.Moneda') , null )          !!}
</div>

{{-- precio --}}
<div class="formulario-label-fiel">
  {!! Form::label('precio', 'Precio', array('class' => 'formulario-label ')) !!}
  {!! Form::number('precio', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('stock', 'Stock', array('class' => 'formulario-label ')) !!}
  {!! Form::number('stock', null ,['class' => 'formulario-field']) !!}
</div>




 <div class="formulario-label-fiel">
            {!! Form::label('nuevo_usado', '¿Nuevo o usado?', array('class' => 'formulario-label ')) !!}
            {!! Form::select('nuevo_usado',['nuevo' => 'Nuevo',
                                            'usado' => 'Usado'] , null )          !!}
 </div>

 <div class="formulario-label-fiel">
            {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
            {!! Form::select('estado',['si' => 'Activo',
                                       'no' => 'Inactivo'] , null )          !!}
 </div>








