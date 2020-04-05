 Vue.component('categoria-home-section-individual' ,
{

props:['Categoria']
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
   

     var url = '/getProductosDeEstaCategoriaParaHome';

       
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
    
    this.getProductosDeEstaCategoriaParaHome();
    
},


template:' 

      <div v-if="productos_para_mostrar.length" class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">@{{Categoria.name}}</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              <producto-lista 
                 v-for="Producto in productos_para_mostrar" 
                        :Producto="Producto" 
                        :Tipo="producto_vista_bloque_en_slide" 
                        :Empresa="Empresa"></producto-lista>
              
            </div>
          </div>
        </div>
      </div>
      <div v-else class="contiene-spiner-box-grande">
         <div class="cssload-container">
           <div class="cssload-tube-tunnel"></div>
         </div>
      </div>

'



});