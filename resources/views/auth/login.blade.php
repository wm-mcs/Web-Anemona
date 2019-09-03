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
   <div class="container-fluid section-wrapper auth-contenedor-form">
     <div class="row">    
      <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 col-lg-4 col-lg-push-4 wow fadeInUp">
       @include('formularios.auth.login_form')
      </div>
    </div>
  </div>
     

@stop