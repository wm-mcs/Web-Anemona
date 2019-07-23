@extends('layouts.creative.layout_creative')

@section('titulo') {{$Empresa->name}} @stop

@section('descripcion') {{$Empresa->descripcion_empresa}} @stop

@section('robot') index, follow @stop

@section('palabras_claves') {{$Empresa->palabras_claves_empresa}} @stop



@section('nav') @include('paginas.home.home_nav') @stop

@section('slider')  @include('paginas.home.slider') @stop

@section('contenido')
      @include('paginas.home.home_about')       
      @include('paginas.home.home_precios')    
      <img data-src="{{url()}}/imagenes/Slider/foto-slider-corazon.jpg" class="get_width_100">  
      @include('paginas.home.home_piedras_cuidados')   
@stop      









