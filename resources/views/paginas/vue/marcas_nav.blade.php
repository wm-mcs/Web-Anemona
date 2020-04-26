Vue.component('marcas-nav' ,
{

props:['marca']
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

 
  <li  class="has-children active" >
      <span v-if="$root.mostrar_para_celuar" class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem0"></span>
      <a :href="marca.route" >



      @{{marca.name_arreglado}}

      </a> 

    
     

     
    <ul v-if="marca.categorias_de_marca" class="dropdown">
      <li v-for="categoria in marca.categorias_de_marca"><a :href="categoria.route_marca_producto">@{{categoria.name_arreglado}}</a></li>
      
      
    </ul>
  </li>

'



});