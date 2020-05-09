<!DOCTYPE html>
<html lang="es">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">

     <link rel="shortcut icon" href="{{ asset('imagenes/Favicon/favicon.ico') }}"> 

    
    <title>@yield('titulo')</title>
    <meta name="Description" content="@yield('descripcion')">      
    <meta name="robots" content="@yield('robot')">
    <meta name="keywords" content="@yield('palabras_claves')">

    @yield('og-propiedades')

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/ecomerce_minimal.css') }}">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
  </head>
  <body>
  
  <div id="app" class="site-wrap">
    

   

    @yield('header-menu-iconos')  

    
    @yield('imagen-grande-cabecera')


    @yield('contenido')

    
    @yield('footer')

   
  </div>

  <script src="{{url()}}{{ elixir('js/ecomerceApp.js')}} " ></script> 

  @if(Auth::guest())
             <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
  @else
      @if(Auth::user()->role ==='adminMcos522')
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script> 
      @else
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
      @endif
  @endif
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>

  <script type="text/javascript">
    @yield('vue')  

  </script>
   
    
  </body>
</html>