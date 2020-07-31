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
 <menu-primer-triada  v-if="categorias.length" name_padre="Categorías" url_padre="{{route('get_home')}}" >
  /* O p c i o n e s   d e l   m e n ú   */
  <template slot="opciones" >
    <li v-for="categoria in categorias" class="header-li-primer-tria">
       <a :href="categoria.route">@{{categoria.name_arreglado}}</a>
    </li>

  </template>  
 </menu-primer-triada> 
});