Vue.component('categorias' ,
{

props:['Empresa']
,  

data:function(){
    return {
         categorias:[]
     


    }
}, 



methods:{

getCategoriasActivas:function(){
   

     var url = '/getCategoriasActivas';

       
      var vue = this;  
      this.cargando = true;         

     axios.get(url).then(function (response){  
            var data = response.data;  
            

            if(data.Validacion == true)
            {
               
               vue.categorias = data.categorias;              
               
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
created: function () {
    this.getCategoriasActivas();
},


template:'

  <li class="has-children active">
      <a href="shop.html" v-if="categorias.length">Collection</a> 
    
      <span v-else class="contiene-el-spiner">
         <div class="cssload-container">
               <div class="cssload-tube-tunnel"></div>
         </div>
      </span>

     
    <ul v-if="categorias.length" class="dropdown">
      <li v-for="categoria in categorias"><a href="#">@{{categoria.name_arreglado}}</a></li>
      
      <li class="has-children">
        <a href="#">Sub Menu</a>
        <ul class="dropdown">
          <li><a href="#">Men</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">Children</a></li>
        </ul>
      </li>
    </ul>
  </li>


'



});