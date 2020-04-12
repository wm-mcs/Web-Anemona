
<div class="formulario-label-fiel">
<div class="formulario-label-aclaracion">
	Las imágenes deben ser en formato <strong>jpg</strong> y en <strong>formato cuadrado</strong>.  Al menos de <strong>1000px x 1000px</strong>. Para que la web se vea linda la primera imagen de cada producto <strong>debe ser en fondo blanco</strong>.
</div>
{!! Form::label('img', 'Imagen', array('class' => 'control-label')) !!}
{!! Form::file('img[]',['class'            => 'file',
                       'id'                => 'imagenes-field',
                       'multiple'          => true,
                       'data-show-upload'  =>'false',
                       'data-show-caption' => 'true' 
                          ]) !!}   
</div>









 


 
 

 

