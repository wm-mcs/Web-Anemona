Vue.component('producto-show-interface' ,
{

props:['empresa','titulo']
,  

data:function(){
     return {
         
     productos: {!! json_encode($Productos) !!},
     filtros_activos:[],
     filtros_lista:[],
     titulo_que_cambia_segun_filtro:''



    }
}, 



methods:{

         

},
computed:{
   titulo_de_la_seccion:function(){

      if(this.titulo_que_cambia_segun_filtro != '')
      {
        return this.titulo_que_cambia_segun_filtro;
      }
      else
      {
        return this.titulo;
      } 
    },
    
   productos_para_mostrar:function(){
    return this.productos;
   }

},
mounted:function (){
  
   

},


template:'

  <div id="catalogo" v-if="productos_para_mostrar.length" class="Padding-de-secciones container products-wrap border-top-0">
      
       <h2 class="Titulos-de-secciones">@{{titulo_de_la_seccion}}</h2>
      
      
        <div class="row no-gutters products">
          <producto-lista v-for="Producto in productos_para_mostrar" 
                           :producto="Producto" 
                           :tipo="$root.producto_vista_bloque" 
                           :empresa="$root.Empresa" 
                           :key="Producto.id"></producto-lista>
          
        </div>
      
    </div>
    <div v-else class="contiene-spiner-box-grande">
         <div v-if="$root.cargando" class="cssload-container">
           <div class="cssload-tube-tunnel"></div>
         </div>
         <div v-else class="col-12 text-center p-5 color-text-gris sub-titulos-class">
            No hay productos para mostrar <i class="far fa-meh-blank"></i>
         </div>
    </div>
   



'



});