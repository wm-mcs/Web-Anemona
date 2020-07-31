<section class="background-gris-0 py-5">
	<div class="container">
		<div class="row ">
			<div class="col-12 text-center mb-5 titulos-class text-color-black">
				Confian en nosotros ...
			</div>
			<div class="col-12">
				
			
			@foreach($Clientes as $Entidad )	
				  {{--*/ $Mostrar_admin  = false /*--}}
		          {{--*/ $Entidad        = $Entidad /*--}}
		          @include('admin.clientes.partes.lista')
			@endforeach
			</div>
		</div>
	</div>
</section>