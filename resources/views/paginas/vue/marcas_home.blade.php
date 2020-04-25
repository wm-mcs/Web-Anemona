 Vue.component('marcas-home' ,
{

props:['Marcas','Mostrar','Cantidad_maxima','Titulo']
,  

data:function(){
    return {
         
     productos_para_mostrar: []


    }
}, 
computed:{


  
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

    if(this.Marcas.length)
    {

    }
    else
    {
     this.getMarcas();
    }

    

    
    
},


template:' 




     <div v-if="Marcas.length" class="Padding-de-secciones container products-wrap border-top-0">
      
       <h2 class="Titulos-de-secciones">@{{Titulo}}</h2>
      
      
        <div class="row no-gutters products">
          <marca-lista v-for="Marca in Marcas" 
                           :Marca="Marca" 
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