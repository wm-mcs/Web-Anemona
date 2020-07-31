 Vue.component('novededades' ,
{

props:['empresa']
,  

data:function(){
    return {
         
     productos_novedades: []


    }
}, 



methods:{

getProductosNovedades:function(){
   

     var url = '/getProductosNovedades';

       
      var vue = this;  
              

     axios.get(url).then(function (response){  
            var data = response.data;  
            

            if(data.Validacion == true)
            {
               
               vue.productos_novedades = data.Productos;   

               
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
    
    this.getProductosNovedades();
},


template:' 

   <div  v-lazy-container="{ selector: 'img' }" v-if="productos_novedades.length" class="Padding-de-secciones container products-wrap border-top-0">
      
       <h2 class="Titulos-de-secciones">Novedades en equipamiento para gimnasios</h2>
      
      
        <div class="row no-gutters products">
          <producto-lista v-for="Producto in productos_novedades" 
                           :producto="Producto" 
                           :tipo="$root.producto_vista_bloque" 
                           :empresa="empresa" 
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

