Vue.component('producto-show-interface' ,
{

props:[]
,  

data:function(){
     return {
         
     productos: {!! json_encode($Productos) !!},
     filtros_activos:[],
     filtros_lista:[]


    }
}, 



methods:{

         

},
computed:{
  
  
   productos_para_mostrar:function(){
    return this.productos;
   }

},


template:'

  <div v-if="productos_para_mostrar.length" class="Padding-de-secciones container products-wrap border-top-0">
      
       <h2 class="Titulos-de-secciones">Titulo</h2>
      
      
        <div class="row no-gutters products">
          <producto-lista v-for="Producto in productos_para_mostrar" 
                           :producto="Producto" 
                           :tipo="$root.producto_vista_bloque" 
                           :empresa="$root.Empresa" 
                           :key="Producto.id"></producto-lista>
          
        </div>
      
    </div>
    <div v-else class="contiene-spiner-box-grande">
         <div class="cssload-container">
           <div class="cssload-tube-tunnel"></div>
         </div>
    </div>
   



'



});