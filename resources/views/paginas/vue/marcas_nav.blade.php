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
               app.marcas = data.Marcas; 
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

   

    if(app.scrolled &&  app.marcas.length)
    {
      this.getMarcas();
    }
    


    
    
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