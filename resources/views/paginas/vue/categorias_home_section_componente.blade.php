 Vue.component('categoria-home-section' ,
{

props:['Empresa','Categorias']
,  

data:function(){
    return {
         
     Categorias_para_mostrar: []


    }
}, 
computed:{
categorias_con_varios_productos:function(){
   let categorias = this.Categorias.filter( categoria =>  parseInt(categoria.cantidad_de_productos_activos) >= 1 ); 

   return categorias;
  }

  
},
methods:{


         

},
mounted: function () {
    
    
    this.Categorias_para_mostrar = this.Categorias;
},


template:' 

    <span  >

      <categoria-home-section-individual :Categoria="Categoria" v-for="Categoria in categorias_con_varios_productos" :key="Categoria.id"></categoria-home-section-individual>
      
    </span>
    

'



});

