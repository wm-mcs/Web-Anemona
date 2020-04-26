Vue.component('marcas-nav' ,
{

props:['marcas']
,  

data:function(){
    return {
         
     


    }
}, 



methods:{


         

},
mounted: function () {

   

    

    
    
},


template:'

 
  <li v-if="marcas.length" class="has-children active" v-for="marca in marcas">
      <span v-if="$root.mostrar_para_celuar" class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem0"></span>
      <a href="shop.html" v-if="categorias.length">



      @{{marca.name_arreglado}}

      </a> 

    
     

     
    <ul v-if="categorias.length" class="dropdown">
      <li v-for="categoria in marca.categorias_de_marca"><a :href="categoria.route_marca_producto">@{{categoria.name_arreglado}}</a></li>
      
      
    </ul>
  </li>
  <span v-else class="contiene-el-spiner">
    <div class="cssload-container">
      <div class="cssload-speeding-wheel"></div>
    </div>
  </span>


'



});