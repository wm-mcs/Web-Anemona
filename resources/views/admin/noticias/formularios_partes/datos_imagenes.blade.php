
<div class="formulario-label-fiel">
{!! Form::label('img', 'Portada', array('class' => 'formulario-label ')) !!}
{!! Form::file('img',['class' => 'formulario-field']) !!}   
</div>

<div class="formulario-label-fiel">
{!! Form::label('img2', 'Imagen Secundaria', array('class' => 'formulario-label ')) !!}
{!! Form::file('img2',['class' => 'formulario-field']) !!}   
</div>

<div class="formulario-label-fiel">
{!! Form::label('img3', 'Imagen Secundaria', array('class' => 'formulario-label ')) !!}
{!! Form::file('img3',['class' => 'formulario-field']) !!}   
</div> 

<div class="formulario-label-fiel">
{!! Form::label('img4', 'Imagen Secundaria', array('class' => 'formulario-label ')) !!}
{!! Form::file('img4',['class' => 'formulario-field']) !!}   
</div> 

<div class="formulario-label-fiel">
{!! Form::label('img5', 'Imagen Secundaria', array('class' => 'formulario-label ')) !!}
{!! Form::file('img5',['class' => 'formulario-field']) !!}   
</div>  

@if(isset($Entidad))
<div class="flex-row-column get_width_100" >
  <img class="admin-img-section-img" src="{{$Entidad->url_img_portada}}">
  <img class="admin-img-section-img" src="{{$Entidad->url_img_adicional}}">

  <img class="admin-img-section-img" src="{{url()}}/imagenes/Noticias/{{$Entidad->name_slug . $Entidad->id}}-adicional-3.jpg"> 
  <img class="admin-img-section-img" src="{{url()}}/imagenes/Noticias/{{$Entidad->name_slug . $Entidad->id}}-adicional-4.jpg"> 
  <img class="admin-img-section-img" src="{{url()}}/imagenes/Noticias/{{$Entidad->name_slug . $Entidad->id}}-adicional-5.jpg"> 
  
</div>
@endif








 


 
 

 

