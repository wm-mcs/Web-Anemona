 Vue.component('marcas-home' ,
{

props:['marcas','titulo']
,  

data:function(){
    return {
         
     productos_para_mostrar: []


    }
}, 
computed:{

 marcas_ordenadas:function(){
    return this.marcas.sort(function (a, b){
       return (b.rank - a.rank)
    });
 }

  
},



methods:{


         
         

},
mounted: function () {

    if(this.marcas.length)
    {

    }
    else
    {      
      this.$root.getMarcas();
    }

    

    
    
},


template:' 




     <div v-if="marcas.length" class="Padding-de-secciones container border-top-0">
      
       <h2 class="Titulos-de-secciones">@{{titulo}}</h2>
      
      
        <div class="row ">
          <marca-lista v-for="Marca in marcas_ordenadas" 
                           :marca="Marca" 
                           :key="Marca.id"></marca-lista>
          
        </div>
      
    </div>
    <div v-else class="contiene-spiner-box-grande">
         <div class="cssload-container">
           <div class="cssload-tube-tunnel"></div>
         </div>
    </div>

'



});