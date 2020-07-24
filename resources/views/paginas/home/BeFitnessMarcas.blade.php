<section class="background-gris-1 py-5">
	<div class="container">
		<div class="row ">
			<div class="col-12 text-center mb-5 titulos-class text-color-black">
				Nuestras marcas ...
			</div>
			@foreach($Marcas as $Entidad )	
				  {{--*/ $Mostrar_admin  = false /*--}}
		          {{--*/ $Entidad        = $Entidad /*--}}
		          {{--*/ $Route          = $Entidad->route /*--}}
		          @include('admin.marcas.partes.lista')
			@endforeach
		</div>
	</div>
</section>