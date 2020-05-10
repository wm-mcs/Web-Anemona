Vue.component('marcas-nav' ,
{

props:['marca']
,  

data:function(){
    return {
         
     


    }
}, 



methods:{

getMarcas:function(){
   

     var url = '/getMarcas';

       
     var vue = this; 

     axios.get(url).then(function (response){  
            var data = response.data;  
            

            if(data.Validacion == true)
            {
               app.Marcas = data.Marcas; 
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

   

    if(app.scrolled &&  app.Marcas.length)
    {
      this.getMarcas();
    }
    


    
    
},


template:'

 
  <li  class="has-children active" >
      <span v-if="$root.mostrar_para_celuar" class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem0"></span>
      <a :href="marca.route" >



      @{{Marca.name_arreglado}}

      </a> 

    
     

     
    <ul v-if="marca.categorias_de_marca" class="dropdown">
      <li v-for="Categoria in marca.categorias_de_marca">
      <a :href="Categoria.route_marca_producto">@{{Categoria.name_arreglado}}</a>
      </li>
      
      
    </ul>
  </li>

'



});