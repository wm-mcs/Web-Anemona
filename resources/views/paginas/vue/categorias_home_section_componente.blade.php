 Vue.component('categoria-home-section' ,
{

props:['Empresa','Categorias']
,  

data:function(){
    return {
         
     Categorias_para_mostrar: [];


    }
}, 
computed:{
categorias_con_varios_productos:function(){
   let categorias = this.Categorias_para_mostrar.find( categoria => categoria.cantidad_de_productos_activos >= 1 ); 

   return categorias;
  }

  
},



methods:{


         

},
mounted: function () {
    
    
    this.Categorias_para_mostrar = this.Categorias;
},


template:' 

    <div v-if="Categorias_para_mostrar.length" v-for="Categoria in Categorias_para_mostrar" class="site-section">

      <categoria-home-section-individual :Categoria="Categoria"></categoria-home-section-individual>
      
    </div>
    <div v-else class="contiene-spiner-box-grande">
         <div class="cssload-container">
           <div class="cssload-tube-tunnel"></div>
         </div>
    </div>

'



});

