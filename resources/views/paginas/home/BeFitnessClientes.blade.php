<section v-lazy-container="{ selector: 'img' }" class="background-gris-0 py-5">
	<div class="container">
		<div class="row ">
			<div class="col-12 text-center mb-5 titulos-class text-color-black">
				Confían en nosotros ...
			</div>
			<div class="col-12">
				<div class="row">
					@foreach($Clientes as $Entidad )	
				      {{--*/ $Mostrar_admin  = false /*--}}
		          {{--*/ $Entidad        = $Entidad /*--}}
		          @include('admin.clientes.partes.lista')
			   @endforeach
				</div>		
			
			</div>
		</div>
	</div>
</section>