Vue.component('categorias' ,
{

props:['empresa','categorias']
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

  <li class="has-children active">
      <span v-if="$root.mostrar_para_celuar" class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem0"></span>
      <a href="shop.html" v-if="categorias.length">



      Categorías

      </a> 

    
      <span v-else class="contiene-el-spiner">
                <div class="cssload-container">
                  <div class="cssload-speeding-wheel"></div>
                </div>
      </span>

     
    <ul v-if="categorias.length" class="dropdown">
      <li v-for="categoria in categorias"><a :href="categoria.route">@{{categoria.name_arreglado}}</a></li>
      
      /*<li class="has-children">
        <a href="#">Sub Menu</a>
        <ul class="dropdown">
          <li><a href="#">Sub categría</a></li>
          
        </ul>
      </li>*/
    </ul>
  </li>
  

'



});