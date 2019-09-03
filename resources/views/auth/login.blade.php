@extends('layouts.user_layout.user_layout')


@section('title')
 Iniciar Sesion 
@stop

@section('MetaContent')
  Entra en.  
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop




@section('content')


 

  <img data-src="{{$Empresa->img_logo_cuadrado}}" class="auth-logo">

   <h1>Inicio de Sesión</h1>
   <div class="auth-contenedor-form">      
      <div class="fadeInUp">
       @include('formularios.auth.login_form')
      </div>    
  </div>
     

@stop