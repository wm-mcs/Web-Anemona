 Vue.component('marcas-home' ,
{

props:['Marcas','Mostrar','Cantidad_maxima','Titulo']
,  

data:function(){
    return {
         
     productos_para_mostrar: []


    }
}, 
computed:{


  
},



methods:{

getMarcas:function(){
   

     var url = '/getMarcas';

       
      var vue = this;  
      this.cargando = true;   
      var data = {categoria_id:this.Categoria.id}  ;    

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
    
    
    
},


template:' 




     <div v-if="Marcas.length" class="Padding-de-secciones container products-wrap border-top-0">
      
       <h2 class="Titulos-de-secciones">@{{Titulo}}</h2>
      
      
        <div class="row no-gutters products">
          <producto-lista v-for="Producto in productos_para_mostrar" 
                           :Producto="Producto" 
                           :Tipo="$root.producto_vista_bloque" 
                           :Empresa="$root.Empresa" 
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