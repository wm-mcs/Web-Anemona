
<span style="font-family: arial; font-size: 20px; padding-bottom: 10px;" >
 <strong>Contacto por web </strong>
</span>
<br>
<br>


<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>Nombre</strong>: {{$nombre}}
</div>
<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>Email</strong>: {{$email}}
</div>
<br>

@if(isset($request))

@if($request->get('pais') != '')
<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>País</strong>: <br>{{$request->get('pais')}}
</div>
<br>
@endif

@if($request->get('celular') != '')
<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>Celular</strong>: <br>{{$request->get('celular')}}
</div>
<br>
@endif

@if($request->get('nombre_empresa') != '')
<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>Nombre empresa</strong>: <br>{{$request->get('nombre_empresa')}}
</div>
<br>
@endif

@if($request->get('que_vendes') != '')
<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>¿Qué vendes?</strong>: <br>{{$request->get('que_vendes')}}
</div>
<br>
@endif

@if($request->get('presupuesto') != '')
<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>¿Con qué presupuesto cuentas?</strong>: <br> {{$request->get('presupuesto')}}
</div>
<br>
@endif

@if($request->get('tipo_consulta_de_easy') != '')
<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>Consulta por EASYSOCIO</strong>: <br> {{$request->get('tipo_consulta_de_easy')}}
</div>
<br>
@endif

@if($request->get('que_necesitas') != '')
<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>¿Qué necesitas?</strong>:<br> @foreach($request->get('que_necesitas') as $Necesitas) * {{$Necesitas}} <br>  @endforeach
</div>
<br>
@endif


@endif

<div style="font-family: arial; font-size: 14px; padding-bottom: 5px;" >
 <strong>Mensaje</strong>:<br>   {{$mensaje}}
<br>
</div>



<br>

