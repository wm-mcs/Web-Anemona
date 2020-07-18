<section class="background-gris--2 py-4 py-lg-0">
	<div class="container">
		<div class="row ">
			<div class="col-12 text-center mb-5">
				Clientes
			</div>
			@foreach($Clientes as $Entidad )	
				  {{--*/ $Mostrar_admin  = false /*--}}
		          {{--*/ $Entidad        = $Entidad /*--}}
		          @include('admin.clientes.partes.lista')
			@endforeach
		</div>
	</div>
</section>