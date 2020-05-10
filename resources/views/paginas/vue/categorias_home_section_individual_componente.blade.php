 Vue.component('categoria-home-section-individual' ,
{

props:['categoria']
,  

data:function(){
    return {
         
     productos_para_mostrar: []


    }
}, 
computed:{


  
},



methods:{

getProductosDeEstaCategoriaParaHome:function(){
   

     var url   = '/getProductosDeEstaCategoriaParaHome';

       
      var vue  = this;  
        
      var data = {categoria_id:this.categoria.id}  ;    

     axios.post(url,data).then(function (response){  
            var data = response.data;  
            

            if(data.Validacion == true)
            {
               
               vue.productos_para_mostrar = data.Productos;   

               
            }
            else
            {
               
              $.notify(response.data.Validacion_mensaje, "error");
            }
           
           }).catch(function (error){

             if(error.status != 200)
             {
                $.notify(error.status, "error");
             }

                     
            
           });
}

         
         

},
mounted: function () {
    
    this.getProductosDeEstaCategoriaParaHome();
    
},


template:' 




     <div v-if="productos_para_mostrar.length" class="Padding-de-secciones container products-wrap border-top-0">
      
       <h2 class="Titulos-de-secciones">@{{categoria.name}}</h2>
      
      
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