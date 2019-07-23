


<a href="{{$Entidad->route}}" >
<div class="producto-cuadro-contiene-img">
  
    <img src="{{$Entidad->url_img}}" class="producto-cuadro-img">
  
</div>
</a>

<a href="{{$Entidad->route}}" >
<div class="producto-cuadro-contiene-name">

  <div class="producto-cuadro-name color-text-gris"> {{$Entidad->name}} </div>
  
  
</div>
</a>


<div class="producto-cuadro-contiene-precio">
  <div class="producto-cuadro-precio ">  

          @if($Entidad->precio_producto == 0)
            <div class="producto-lista-consultar"><i class="fas fa-info-circle"></i> Consultar</div>
          @else
             <span class="helper-reduce-texto">{{$Entidad->moneda}} </span> {{$Entidad->precio_producto}}
          @endif
   
  </div>

</div>

<div class="producto-cuadro-contiene-aclaracion">
   @if($Entidad->stock > 0)
    <div class="text-center text-color-primary helper-reduce-texto">
        Entrega inmediata <i class="fas fa-check"></i>
    </div>

  @else
    <div class="text-center color-text-gris helper-reduce-texto "> 
        Disponible en 24hs  <i class="far fa-clock"></i>
    </div>
  @endif
</div>
  


  

